<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Project;

class Project_user extends Model
{
    protected $fillable = ['project_id', 'user_id'];
    
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
