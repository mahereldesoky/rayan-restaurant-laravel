<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name',
        'description',
        'price',
        'status'
    ];



    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id' ,'id');
    }

    use HasFactory;
}
