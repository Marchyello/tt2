<?php

namespace tt2;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
        'title',
        'description',
        'excerpt',
    ];

    /*protected $dates = ['created_at'];*/

    public function user()
    {
        return $this->belongsTo('tt2\User');
    }

    public function comment()
    {
        return $this->hasMany('tt2\Comment');
    }

    public function scopeCreatedAt($query)
    {
        $query->orderBy('created_at', 'desc');
    }

    //Izveidot funkciju, kas idrukā receptes pirmos 20 simbolus or smth.
    public static function generateExcerpt($description)
    {
        if (strlen($description) < 41){
            $excerpt = $description;
        }
        else {
            $excerpt = substr($description, 0, 40) . '...';
        }
        return $excerpt;
    }

}

