<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserQuestion extends Model
{
    protected $table = "user_questions";
    
    protected $fillable = ['content', 'status'];


    public function user() {
        return $this->belongsTo('App\User');
    }
}
