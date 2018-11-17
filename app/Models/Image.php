<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
 public function category()
 {
  return $this->belongsTo(Category::class);
 }
 public function user()
 {
  return $this->belongsTo(User::class);
 }
}
