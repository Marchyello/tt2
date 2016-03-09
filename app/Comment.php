<?php

namespace tt2;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    public function user ()
    {
        return $this->belongsTo('tt2\User');
    }

    public function recipe ()
    {
        return $this->belongsTo('tt2\Recipe');
    }

}
