<?php

namespace tt2;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
      'content',
    ];

    public function user ()
    {
        return $this->belongsTo('tt2\User');
    }

    public function recipe ()
    {
        return $this->belongsTo('tt2\Recipe');
    }

    public static function generateExcerpt($content)
    {
        if (strlen($content) < 41){
            $excerpt = $content;
        }
        else {
            $excerpt = substr($content, 0, 40) . '...';
        }
        return $excerpt;
    }

}
