<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Project;

class Classlevel extends Model
{
    protected $fillable=['levelname'];

    public function projects(){
        return $this->hasMany(Project::class);
    }
}
