<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detial extends Model
{
    protected $fillable = ['book_id', 'user_id', 'image1','image2','image3'];

 
   
    public function book()
    {
      return $this->belongsTo(Book::class);
    }
}
