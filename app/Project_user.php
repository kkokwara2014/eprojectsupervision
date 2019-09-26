<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Project;

class Project_user extends Model
{
    public function projects(){
        return $this->belongsToMany(Project::class,'project_users')->withTimestamps();
    }
    public function users(){
        return $this->belongsToMany(User::class,'project_users')->withTimestamps();
    }
}
