<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    /**
     * Model `Contact` menyimpan informasi kontak bisnis (alamat, telepon, media sosial).
     */

    protected $fillable = [
        'address',
        'phone',
        'email',
        'map_url',
        'instagram',
        'facebook',
        'whatsapp',
        'opening_hours',
    ];
}
