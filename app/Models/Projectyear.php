<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Projectyear extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'year'
    ];

    public function projects() {
        return $this->hasMany('App\Models\Project');
    }
}
