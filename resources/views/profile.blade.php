@extends('layouts.main')

@section('content')
<div class="background-custom text-white">
    @include('partials.profile.intro')
    @include('partials.profile.visi-misi')
    @include('partials.profile.culture')
</div>
    
@endsection

<style>
    
    .font-family {
        font-family: 'Bebas Neue', cursive;
    }
    .background-custom {
        background: url('/img/bg-visi-misi.png') no-repeat center ;
        background-position-y: 45% !important
    }

    @media screen and (max-width: 1280px) {
        .background-custom {
            background: url('/img/bg-visi-misi.png') no-repeat center ;
            background-position-y: 58% !important;
            
        }
    }
    
</style>