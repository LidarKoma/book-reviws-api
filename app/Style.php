<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
    protected $fillable = ['work_id', 'name','image'];

    public function work()
    {
      return $this->belongsTo(Work::class);
    }
}
