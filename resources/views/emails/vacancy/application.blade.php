@component('mail::layout')

@component('mail::panel')
Aplikasi Lamaran Pekerjaan
@endcomponent
@component('mail::button', ['url' => $cv_url])
Download CV
@endcomponent 
@component('mail::table')
|              | |               | 
|:-------------|-|:--------------| 
@foreach ($fields as $key => $value)
| {{ $key }}   |:| {{ $value }}  | 
@endforeach

@endcomponent