<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['name', 'image', 'category_id'];

    public function category()
    {
      return $this->belongsTo(Category::class);
    }

    public function works()
    {
      return $this->hasMany(Work::class);
    }
    
}
