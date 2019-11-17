<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PublicCapability extends Model
{
    //

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'is_published',
        'display_order',
    ];

    public function site()
    {
        return $this->belongsTo('App\PublicSiteContent', 'site_contents_id');
    }
}
