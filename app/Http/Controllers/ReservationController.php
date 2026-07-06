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

        $requestedTime = Carbon::parse($validated['time']);

        $conflict = Reservation::where('date', $validated['date'])
            ->whereIn('status', ['pending', 'approved'])
            ->whereBetween('time', [
                $requestedTime->copy()->subHours(2)->format('H:i:s'),
                $requestedTime->copy()->addHours(2)->format('H:i:s'),
            ])
            ->exists();

        if ($conflict) {
            $alternativeTime = $this->findAlternative($validated['date'], $requestedTime);

            return back()->withInput()->with([
                'error' => 'The selected slot is unavailable. Please choose another time.',
                'alternative' => $alternativeTime,
            ]);
        }

        $validated['status'] = 'pending';
        $validated['whatsapp_opt_in'] = $request->boolean('whatsapp_opt_in');
        $validated['event_size'] = $this->eventSizeLabel($validated['guest_count']);

        $reservation = Reservation::create($validated);

        Mail::to($reservation->email)->send(new ReservationConfirmation($reservation));

        return back()->with('success', 'Thank you! Your reservation request has been received. We will confirm it shortly.');
    }

    private function eventSizeLabel(int $guestCount): string
    {
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

        return null;
    }
}
