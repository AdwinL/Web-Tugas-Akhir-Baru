<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    /**
     * Model `Menu` menyimpan item menu restoran.
     * Penjelasan singkat (Indonesia):
     * - `$fillable`: kolom yang boleh diisi massal.
     * - `$casts`: konversi tipe, mis. price sebagai decimal.
     */

    protected $fillable = [
        // kolom yang dapat diisi langsung
        'category_id',
        'title',
        'description',
        'price',
        'image_path',
        'is_active',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'is_active' => 'boolean',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
