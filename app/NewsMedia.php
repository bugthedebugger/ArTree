<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsMedia extends Model
{
    protected $fillable = [
        'name',
        'project_date',
        'location',
        'featured',
        'body',
        'hidden',
        'uuid',
    ];

    public function gallery()
    {
        return $this->hasMany('App\Models\Gallery', 'uuid', 'uuid');
    }

    public function projectYear()
    {
        return $this->belongsTo('App\Models\Projectyear', 'projectyear_id', 'id');
    }

    public function projects()
    {
        return $this->hasMany('App\Models\Project');
    }
}
