<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * Model `User` untuk menyimpan data pengguna.
     *
     * Penjelasan singkat (Indonesia):
     * - `$fillable`: atribut yang dapat diisi massal.
     * - `$hidden`: atribut yang disembunyikan saat serialisasi (mis. JSON).
     * - `$casts`: konversi tipe otomatis untuk atribut tertentu.
     */

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        // kolom yang boleh diisi langsung melalui mass assignment
        'name',
        'email',
        'password',
        'phone',
        'is_admin',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        // atribut yang tidak ingin ditampilkan di respon API
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        // cast otomatis untuk mempermudah penggunaan
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'is_admin' => 'boolean',
    ];
}
