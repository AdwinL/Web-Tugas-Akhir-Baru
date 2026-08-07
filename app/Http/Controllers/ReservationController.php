<?php

namespace App\Http\Controllers;

use App\Mail\ReservationConfirmation;
use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input dari form reservasi
        // Penjelasan: aturan memastikan data wajib terpenuhi dan format valid
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:32',
            'email' => 'required|email|max:255',
            'guest_count' => 'required|integer|min:1|max:200',
            'date' => 'required|date|after_or_equal:today',
            'time' => 'required|date_format:H:i',
            'event_type' => 'required|string|max:100',
            'notes' => 'nullable|string|max:1000',
            'whatsapp_opt_in' => 'sometimes|boolean',
        ]);

        // Cek konflik waktu: jika ada reservasi pending/approved dalam jangka +/-2 jam
        $requestedTime = Carbon::parse($validated['time']);

        $conflict = Reservation::where('date', $validated['date'])
            ->whereIn('status', ['pending', 'approved'])
            ->whereBetween('time', [
                $requestedTime->copy()->subHours(2)->format('H:i:s'),
                $requestedTime->copy()->addHours(2)->format('H:i:s'),
            ])
            ->exists();

        // Jika bentrok, cari alternatif waktu dan kembalikan ke form dengan pesan
        if ($conflict) {
            $alternativeTime = $this->findAlternative($validated['date'], $requestedTime);

            return back()->withInput()->with([
                'error' => 'Waktu yang dipilih tidak tersedia. Silakan pilih waktu lain.',
                'alternative' => $alternativeTime,
            ]);
        }

        // Siapkan data sebelum disimpan
        $validated['status'] = 'pending';
        $validated['whatsapp_opt_in'] = $request->boolean('whatsapp_opt_in');
        $validated['event_size'] = $this->eventSizeLabel($validated['guest_count']);

        // Simpan reservasi ke database
        $reservation = Reservation::create($validated);

        // Kirim email konfirmasi (opsional, pastikan mail disetup)
        Mail::to($reservation->email)->send(new ReservationConfirmation($reservation));

        // Kembalikan respon sukses ke pengguna
        return back()->with('success', 'Terima kasih! Permintaan reservasi Anda telah diterima. Kami akan mengonfirmasi segera.');
    }

    private function eventSizeLabel(int $guestCount): string
    {
        // Label sederhana untuk ukuran acara berdasar jumlah tamu
        if ($guestCount <= 40) {
            return 'small';
        }

        if ($guestCount <= 100) {
            return 'medium';
        }

        return 'large';
    }

    private function findAlternative(string $date, Carbon $time): ?string
    {
        // Coba cari alternatif dalam 1..4 jam berikutnya
        for ($hours = 1; $hours <= 4; $hours++) {
            $candidate = $time->copy()->addHours($hours);
            $exists = Reservation::where('date', $date)
                ->whereIn('status', ['pending', 'approved'])
                ->whereBetween('time', [
                    $candidate->copy()->subHours(2)->format('H:i:s'),
                    $candidate->copy()->addHours(2)->format('H:i:s'),
                ])
                ->exists();

            if (! $exists) {
                return $candidate->format('H:i');
            }
        }

        // Tidak menemukan alternatif
        return null;
    }
}
