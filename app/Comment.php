<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

	protected $table = "comments";

    protected $fillable = [
    	'content'
    ];

    public function userQuestion()
    {
    	return $this->belongsTo(UserQuestion::class);
    }
}
