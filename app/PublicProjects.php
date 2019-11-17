<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PublicProjects extends Model
{
    //

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'subtitle',
        'stack',
        'brief_description',
        'long_description',
        'url',
        'github',
        'image_url',
        'is_published',
        'display_order',
    ];
}
