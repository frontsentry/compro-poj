@component('mail::layout')

@component('mail::panel')
Pesan Pengunjung
@component('mail::table')
|              | |               | 
|:-------------|-|:--------------| 
@foreach ($fields as $key => $value)
| {{ $key }}   |:| {{ $value }}  | 
@endforeach

@endcomponent