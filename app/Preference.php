<?php

namespace tt2;

use Illuminate\Database\Eloquent\Model;

class Preference extends Model
{
    protected $fillable = [
        'language',
        'background',
    ];

    public function user()
    {
        return $this->belongsTo('tt2\User');
    }


}
