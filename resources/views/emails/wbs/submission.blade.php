@component('mail::layout')

@component('mail::panel')
Whistle Blowing System
@endcomponent
@component('mail::button', ['url' => $file_url])
File Pendukung
@endcomponent
@component('mail::table')
|              | |               | 
|:-------------|-|:--------------| 
@foreach ($fields as $key => $value)
| {{ $key }}   |:| {{ $value }}  | 
@endforeach

@endcomponent