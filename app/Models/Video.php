<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $guarded=[];

    public function user(){
        return $this->belongsTo(User::class);
    }//end of user
     public function category(){
        return $this->belongsTo(Category::class,'cat_id');
    }//end of category
    public function skills(){
        return $this->belongsToMany(Skill::class,'skills_videos');
    }//end of category
     public function tags(){
        return $this->belongsToMany(Tag::class,'tags_videos');
    }//end of category
       public function comments(){
        return $this->hasMany(Comment::class);
    }//end of category
}
