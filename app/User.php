<?php

namespace tt2;

use Auth;
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

    public function recipes()
    {
        return $this->hasMany('tt2\Recipe');
    }

    public function comments()
    {
        return $this->hasMany('tt2\Comment');
    }

    public function preferences()
    {
        return $this->hasOne('tt2\Preference');
    }

    public function hasPreferences()
    {
        $user = Auth::user();
        if (! $user->preferences)
            return false;
        else
            return true;
    }

    public function isAdmin()
    {
        //Pārbauda vai lietotājam ir Admin loma
    }
}
