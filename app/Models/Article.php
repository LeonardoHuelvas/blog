<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $guarded = [
        'id', 'created_at', 'updated_at'
        
    ];
   
      //Relación de uno a muchos(Article-user)
      public function user(){
        return $this->belongsTo(User::class);
    }

    //Relación de uno a muchos (article-comments)
    public function comments(){
        return$this->hasMany(Comments::class);
    }

     //Relación de uno a muchos inversa (category-comments)
     public function category(){
        return $this->belongsTo(Category::class);
     }
}
