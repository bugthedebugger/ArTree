<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name',
        'project_date',
        'location',
        'event',
        'featured',
        'body',
        'hidden',
        'category_id',
        'projectyear_id',
        'uuid',
    ];

    public function event() {
        return $this->hasOne('App\Models\Event');
    }

    public function gallery() {
        return $this->hasMany('App\Models\Gallery', 'uuid', 'uuid');
    }

    public function projectYear() {
        return $this->belongsTo('App\Models\Projectyear', 'projectyear_id', 'id');
    }

    public function category() {
        return $this->belongsTo('App\Models\Category');
    }
}
