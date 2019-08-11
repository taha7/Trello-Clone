<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $hidden = ['pivot'];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
