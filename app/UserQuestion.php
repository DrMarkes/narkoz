<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\UserQuestion
 *
 * @property int $id
 * @property int $user_id
 * @property string $content
 * @property string $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Query\Builder|\App\UserQuestion whereContent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UserQuestion whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UserQuestion whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UserQuestion whereStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UserQuestion whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UserQuestion whereUserId($value)
 * @mixin \Eloquent
 */
class UserQuestion extends Model
{
    protected $table = "user_questions";
    
    protected $fillable = ['content', 'status'];


    public function user() {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }
}
