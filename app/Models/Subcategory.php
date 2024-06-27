<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
   public function category()
   {
       return $this->belongsTo(Category::class);
   }
   public function ads()
   {
      return $this->hasMany(Ad::class);
   }
}
