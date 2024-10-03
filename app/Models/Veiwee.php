<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiwee extends Model
{
    use HasFactory;
    
    protected $table = 'views';

    // Define the fillable fields
    protected $fillable = ['name','language','image','create_date' ];
}
