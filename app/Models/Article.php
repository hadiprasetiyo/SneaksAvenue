<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
  use HasFactory;

  protected $fillable = [
    'image',
    'title',
    'price',
    'varian_id'
  ];

  public function getBrand()
  {
    return $this->belongsTo(Varian::class, 'varian_id','id');
  }
}
