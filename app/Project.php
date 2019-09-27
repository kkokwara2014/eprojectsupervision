<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Classlevel;
use App\User;
use App\Chapter;
use App\Allocation;

class Project extends Model
{
    protected $fillable=['title','casestudy','user_id','projyear','classlevel_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function classlevel(){
        return $this->belongsTo(Classlevel::class);
    }

    public function chapters(){
        return $this->hasMany(Chapter::class);
    }

    public function allocations(){
        return $this->hasMany(Allocation::class);
    }
}
