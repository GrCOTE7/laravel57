<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
 protected $fillable = [
  'name', 'slug',
 ];

 /**
  * Get the images.
  */
 public function images()
 {
  return $this->hasMany(Image::class);
 }
}
