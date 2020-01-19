<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\DateTime;

class BDFIUser extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\BDFIUser';

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
			Text::make('Session UUID', 'session_uuid')->sortable(),

			DateTime::make('Created', 'created_at')->sortable(),
			DateTime::make('Updated', 'updated_at')->sortable(),
			Text::make('Name', function () {
				return $this->first_name.' '.$this->surname;
			}),
			Text::make('business_name')->sortable(),
			Text::make('role')->sortable(),
			Text::make('country')->sortable(),


			Text::make('email')->sortable(),
			Text::make('phone_number')->sortable(),
			Text::make('business_address')->hideFromIndex(),
			Text::make('brand_image_url')->hideFromIndex(),
			Text::make('email_image_url')->hideFromIndex(),
			Text::make('show_copy_button')->hideFromIndex(),
			Text::make('confirm_delete_prompts')->hideFromIndex(),
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
}
