<?php

namespace tt2;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
        'title',
        'description',
        'excerpt',
    ];

    public function user ()
    {
        return $this->belongsTo('tt2\User');
    }

    public function comment ()
    {
        return $this->hasMany('tt2\Comment');
    }

    public function setCreatedAtAttribute($date)
    {
        $this->attributes['created_at'] = Carbon::parse($date);
    }

    /*public function scopeCreated($query)
    {
        $query->where('created_at', ''
    }*/

}

