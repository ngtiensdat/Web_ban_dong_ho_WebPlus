<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Watch extends Model {
    use HasFactory;

    protected $fillable = ['name', 'category_id', 'price', 'stock', 'description', 'image'];

    // Thiết lập mối quan hệ với Category
    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }
}



