<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Chapter;
use App\User;

class Score extends Model
{
    protected $fillable=['user_id','chapter_id','score'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function chapter(){
        return $this->belongsTo(Chapter::class);
    }
}
