<?php

namespace tt2;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

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

    #Izveido jaunu attēlu no lietotāja attēla
    public function generateImage()
    {
        $image = Input::file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $path = 'uploads/images/' . $filename;

        Image::make($image->getRealPath())->resize(320, 180)->save($path);

        return $path;
    }

}

