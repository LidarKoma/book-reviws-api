<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
      // app/Book.php

      protected $fillable = ['user_id', 'title', 'description'];
    //

     // app/Book.php

     public function user()
     {
       return $this->belongsTo(User::class);
     }

     // app/Book.php

    public function ratings()
    {
      return $this->hasMany(rating::class);
    }
   
    public function detials()
    {
      return $this->hasOne(detial::class);
    }

   


}
