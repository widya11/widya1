<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_bmn',
        'name',
        'users_id',
        'categories_id',
        'rooms_id',
        'description',
        'stock',
        'location',
        'slug',
        'condition',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'categories_id', 'id');
    }

    public function room()
    {
        return $this->belongsTo(Room::class, 'rooms_id', 'id');
    }

    public function galleries()
    {
        return $this->hasMany(ProductGallery::class, 'products_id', 'id');
    }
}
