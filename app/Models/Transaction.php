<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'code',
        'status',
        'edited_id',
        'total',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function edit()
    {
        return $this->belongsTo(User::class, 'edited_id', 'id');
    }

}
