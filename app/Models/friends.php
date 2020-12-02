<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class friends extends Model
{
    use HasFactory;
     protected $fillable = ['user_id'];

     protected $primarykey='user_id';
     /* public function friends(){
    	return $this->belongsto('App\Models\user');
    }*/

}
