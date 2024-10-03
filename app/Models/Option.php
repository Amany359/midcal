<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;
        // Specify the table name if it's not the plural of the model name
        protected $table = 'options';
    
        // Define the fillable fields
        protected $fillable = ['title'];
    
}
