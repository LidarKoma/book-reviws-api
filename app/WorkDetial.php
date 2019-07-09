<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkDetial extends Model
{
    protected $fillable = ['work_id', 'name','image1','image2','image3'];

 
   
    public function work()
    {
      return $this->belongsTo(Work::class);
    }
}
