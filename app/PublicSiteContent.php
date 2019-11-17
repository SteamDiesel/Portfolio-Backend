<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PublicSiteContent extends Model
{
    //

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lander_title',
        'lander_subtitle',
        'lander_location',
        'location_link',
        'lander_blurb',
        'about_title',
        'about_subtitle',
        'about_description',
        'contact_phone',
        'contact_email',
        'contact_github',
        'contact_location',
    ];
}
