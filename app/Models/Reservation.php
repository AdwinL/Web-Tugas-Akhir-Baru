<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    /**
     * Model `Reservation` untuk menyimpan data reservasi.
     *
     * Penjelasan singkat (Indonesia):
     * - `$fillable`: daftar field yang boleh diisi massal (mass assignment).
     * - `$casts`: konversi tipe otomatis untuk atribut tertentu.
     */

    protected $fillable = [
        'name',
        'phone',
        'email',
        'guest_count',
        'date',
        'time',
        'event_type',
        'notes',
        'status',
        'alternative_date',
        'alternative_time',
        'whatsapp_opt_in',
        'event_size',
    ];

    protected $casts = [
        'date' => 'date',
        'guest_count' => 'integer',
        'whatsapp_opt_in' => 'boolean',
    ];
}
