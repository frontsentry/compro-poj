<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\{ID, Text, Textarea, File};
use Laravel\Nova\Http\Requests\NovaRequest;

class Report extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Report::class;

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
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(), 
            Text::make('Name'),
            Text::make('Email'),
            Text::make('Contact Name'),
            Textarea::make('Description'),
            Text::make('Unit'),
            Text::make('Unit Position'),
            Textarea::make('Violation'),
            Textarea::make('Violation Place'),
            Textarea::make('Violation Time'),
            Textarea::make('Violation Peoples'),
            Textarea::make('Violation Description'),
            Text::make('Source'),
            File::make('File URL')
                ->disk('s3')
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }

    public static function label() 
    {
        return 'Laporan';
    }

    public static function indexQuery(NovaRequest $request, $query)
    {
        return $query->orderBy('created_at', 'desc');
    }
}
