<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Chapter;
use App\User;

class Score extends Model
{
    protected $fillable=['chapter_id','score'];

    
    public function chapter(){
        return $this->belongsTo(Chapter::class);
    }
}
