<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Department;
use App\Role;
use App\Project;
use App\Comment;
use App\Score;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title','lastname','firstname','othername','identitynumber','gender', 'email', 'password','phone','department_id','role_id','userimage','isactive',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function department(){
        return $this->belongsTo(Department::class);
    }
    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function project(){
        return $this->hasMany(Project::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
    

    public function allocations(){
        return $this->hasMany(Allocation::class);
    }

    // public function projects(){
    //     return $this->belongsToMany(Project::class);
    // }
}
