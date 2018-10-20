<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;


    protected $fillable = [
      'category_id', 'title', 'featured', 'content', 'slug',
    ];


    protected $dates = ['deleted_at'];


    public function category()
    {
      return $this->belongsTo('App\Category');
    }


    public function getFeaturedAttribute($value)
    {
      return asset($value);
    }
}
