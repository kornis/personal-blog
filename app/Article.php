<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = "articles";
    protected $fillable = ['title','content','category_id','user_id'];

    public function category(){
    	return $this->belongsTo('App\Category');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function image(){
    	return $this->hasMany('App\image');
    }

    public function tags(){
    	return $this->belongsToMany('App\Tag');
    }

    public function scopeSearch($query,$title)
    {
        return $query->where('title','LIKE','%'.$title.'%');
    }
    public function scopeCategorySearch($query,$category)
    {
        return $query->where('category_id','LIKE','%'.$category.'%');
    }
}
