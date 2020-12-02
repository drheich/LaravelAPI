<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $fillable = ['post_id',
                           'user_id',
                            'photo_id',
                             'likes_id',
                             'caption'];
    protected $primarykey='post_id';
    protected $primarykey='photo_id';
    /*public function comments(){
    	return $this->hasmany('App\Models\comments');
     public function likes(){
    	return $this->hasmany('App\Models\likes');
    }*/
}

