<?php

namespace App\Nova;

use App\Models\Gallery as Model;
use Illuminate\Support\Facades\Storage;
use Laravel\Nova\Fields\{Text, File, Select};
use Laravel\Nova\Http\Requests\NovaRequest;
use Spatie\TagsField\Tags;
use Epartment\NovaDependencyContainer\NovaDependencyContainer;

class Gallery extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Gallery::class;

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
        foreach (Model::PRODUCT_TYPE as $key => $value) {
        }

        return [
            Text::make('name')->sortable(),

            Text::make('description'),
            Select::make('type')
                ->options([
                    'image' => 'Image',
                    'video' => 'Video',
                ])->displayUsingLabels()
                ->sortable(),

            Select::make('product_type')
                ->options(Model::PRODUCT_TYPE)
                ->displayUsingLabels()
                ->sortable(),

            Text::make('Attachment', 'attachment', function () {
                return '<a href="' . Storage::disk('s3')->url($this->attachment) . '">' . $this->attachment_name . '</a>';
            })->onlyOnDetail()->asHtml(),

            File::make('attachment')
                ->disk('s3')
                ->storeOriginalName('attachment_name')
                ->storeSize('attachment_size')
                ->onlyOnForms()
                ->acceptedTypes('image/jpeg, image/png, video/*'),

            Tags::make('Tags'),
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
        return 'Gallery Media';
    }
}
