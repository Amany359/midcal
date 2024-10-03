<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    // Specify the table name if it's not the plural of the model name
    protected $table = 'subcategories';

    protected $fillable = [
        'name', 
        'description',
        'image',
        'category_id',
    ];

    public function category(){




return $this->belongsTo(category::class, 'category_id');
}
}
