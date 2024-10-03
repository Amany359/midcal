<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



    
class Category extends Model
{
    use HasFactory , SoftDeletes;
   
    protected $table = 'categories';

    // Define the fillable fields
    protected $fillable = ['name','description','image','parent_id' ];
     // Define relationship with Category
    
     
     public function child()
     {
         return $this->hasMany(Category::class,'parent_id');
     }

     public function parent()
     {
         return $this->belongsTo(Category::class,'parent_id');
     }
}
