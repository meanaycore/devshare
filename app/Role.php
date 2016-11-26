<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    protected $fillable = [
        'name', 'decription',
    ];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
