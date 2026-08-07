<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * Model `Category` mengelompokkan item seperti menu atau event.
     */

    protected $fillable = [
        'name',
        'slug',
        'type',
        'description',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
