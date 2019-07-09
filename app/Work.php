<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = ['service_id', 'name'];

    public function service()
       {
         return $this->belongsTo(Service::class);
       }

       public function styles()
       {
         return $this->hasMany(Style::class);
       }
       public function workdetial()
       {
         return $this->hasOne(WorkDetial::class);
       }
}
