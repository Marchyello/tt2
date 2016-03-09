<?php

namespace tt2;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function recipe ()
    {
        return $this->hasMany('tt2\Recipe');
    }

    public function comment ()
    {
        return $this->hasMany('tt2\Comment');
    }

}
