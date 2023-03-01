<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'product_id'
    ];

    /* relationship */
    public function uploader() {
        return $this->hasOne(Products::class, 'id', 'product_id');
    }
}
