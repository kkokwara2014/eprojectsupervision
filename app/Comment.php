<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Chapter;
use App\User;

class Comment extends Model
{
    protected $fillable=['name'];

    public function chapter(){
        return $this->belongsTo(Chapter::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
