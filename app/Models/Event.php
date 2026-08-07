<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    /**
     * Model `Event` untuk menyimpan data event/acara.
     * Penjelasan singkat (Indonesia): menyimpan judul, deskripsi, waktu mulai/akhir,
     * apakah featured/active, dan relasi kategori.
     */

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'description',
        'price_range',
        'image_path',
        'event_type',
        'is_featured',
        'is_active',
        'starts_at',
        'ends_at',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
        'starts_at' => 'datetime',
        'ends_at' => 'datetime',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
