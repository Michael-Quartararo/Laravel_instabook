<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //group has many photos
    public function photos() {
        return $this->hasMany('App\Models\Photo');
    }

    //group belongs to many users
    public function user() {
        return $this->belongsToMany('App\Models\User');
    }

    //group has pivot class for users
    public function Users()
    {
        return $this->belongsToMany('App\Models\User')
                    ->using("App\Models\GroupUser");
    }


    use HasFactory;
}
