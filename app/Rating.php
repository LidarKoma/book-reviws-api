<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{

     // app/Rating.php

     protected $fillable = ['book_id', 'user_id', 'rating'];
    //
       // app/Rating.php

       public function book()
       {
         return $this->belongsTo(Book::class);
       }
}
