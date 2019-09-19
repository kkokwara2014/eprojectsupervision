<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Classlevel;
use App\User;

class Project extends Model
{
    protected $fillable=['title','casestudy','user_id','classlevel_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function classlevel(){
        return $this->belongsTo(Classlevel::class);
    }
}
