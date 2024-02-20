@extends('layouts.main')

@section('content')
<div class="">
    @include('partials.cleaning-service.index')
</div>
    
@endsection

<style>
    
    .font-family {
        font-family: 'Bebas Neue', cursive;
    }
    .text-normal {
        font-size: 18px;
        line-height: 22px;
    }
    @media screen and (max-width: 1280px) {
        .text-normal {
            font-size: 14px;
        line-height: 20px;
        }
    }
</style>