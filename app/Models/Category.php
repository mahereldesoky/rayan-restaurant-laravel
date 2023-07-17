<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';

    protected $fillable = [
        'name',
    ];
    use HasFactory;

    public function products()
    {
        return $this->hasMany(Products::class, 'category_id','id');
    }
}
