<?php 

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Post extends Model {

    protected $fillable = ['title', 'slug', 'thumbnail', 'excerpt', 'content', 'category_id', 'user_id', 'views'];

    protected $with = ['category', 'user'];


    // public function getRouteKeyName(){
    //     return 'slug';
    // }


    public function category(){
        
        return $this->belongsTo( Category::class );

    }

    public function user(){
         return $this->belongsTo( User::class );
    }


    

}