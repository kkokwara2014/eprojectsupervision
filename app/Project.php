<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Classlevel;
use App\User;
use App\Chapter;

class Project extends Model
{
    protected $fillable=['title','casestudy','user_id','projyear','classlevel_id'];

    public function user(){
        return $this->belongsToMany(User::class);
    }
    public function classlevel(){
        return $this->belongsTo(Classlevel::class);
    }
    public function chapters(){
        return $this->hasMany(Chapter::class);
    }
}
