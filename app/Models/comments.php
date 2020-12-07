<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    use HasFactory;

     protected $fillable = ['comment_id',
                           'user_id'];
    protected $primarykey='comment_id';

    /*public function post(){
    	return $this->belongsto('App\Models\post');
    }*/
}
