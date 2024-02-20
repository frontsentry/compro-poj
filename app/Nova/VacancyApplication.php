<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\{ID, Text, Textarea, File, DateTime, BelongsTo};
use Laravel\Nova\Http\Requests\NovaRequest;

class VacancyApplication extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\VacancyApplication::class;

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
        'name', 'email', 'phone', 'vacancy.name'
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
            BelongsTo::make('Posisi', 'vacancy', Vacancy::class),
            DateTime::make('Tanggal Submit', 'created_at'),

            Text::make('Nama', 'name')->sortable(),
            Text::make('Email'),
            Text::make('Nomor Handphone', 'phone')->onlyOnDetail(),

            Text::make('Alamat', 'address')->onlyOnDetail(),
            Text::make('Jenis Kelamin', 'gender')->onlyOnDetail(),
            Text::make('Pendidikan Terakhir', 'latest_education')->onlyOnDetail(),
            Text::make('Jurusan Pendidikan', 'education_major')->onlyOnDetail(),
            Text::make('Tahun Pengalaman', 'years_of_experience')->onlyOnDetail(),
            Text::make('Keahlian', 'work_expertise')->onlyOnDetail(),

            Text::make('Kewarganeraan', 'nationality')->onlyOnDetail(),
            Text::make('Kota', 'city')->onlyOnDetail(),
            Text::make('Provinsi', 'province')->onlyOnDetail(),

            File::make('CV', 'cv_url')->disk('s3'),
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
        return 'Aplikasi Lamaran';
    }

    public static function authorizedToCreate(Request $request)
    {
        return false;
    }
}
