<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Target extends Model
{
    use HasFactory;
     // Specify the table name if it's not the plural of the model name
     protected $table = 'targets';

     // Define the fillable fields
     protected $fillable = ['name','description'];
}
