<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\DateTime;

class BDFIVisitor extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\BDFIVisitor';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
		'id',
		'user_name',
		'user_email',
		'user_phone',
		'user_business_name',
		'user_business_address',
		'ip_address',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
			ID::make()->sortable(),
			DateTime::make('Time Stamp', 'created_at')->sortable(),
			Text::make('Name', 'user_name')->sortable(),
			Text::make('Email','user_email')->sortable(),
			Text::make('phone','user_phone')->sortable(),
			Text::make('Business Name','user_business_name')->sortable(),
			Text::make('Business Address','user_business_address')->sortable(),
			Text::make('ip address','ip_address')->sortable(),
			
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
	}
	/**
	 * The pagination per-page options configured for this resource.
	 *
	 * @return array
	 */
	public static $perPageOptions = [50, 100, 150];
}
