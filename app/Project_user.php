<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project_user extends Model
{
    public function project(){
        return $this->belongsToMany(Project::class,'project_users')->withTimestamps();
    }
    public function user(){
        return $this->belongsToMany(User::class,'project_users')->withTimestamps();
    }
}
