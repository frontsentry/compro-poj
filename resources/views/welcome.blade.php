@extends('layouts.main')

@section('content')
<div class="w-full">
<div class="xl:mb-48 sm:mb-0">  
    <div class="xl:w-full xl:h-[540px] sm:h-auto  sm:w-full mx-auto xl:pt-12 sm:pt-24 sliderAx xl:px-1 sm:px-1">
        {{-- TODO: handle empty banner, set default --}}
        @if (count($banners) > 0)
            @foreach ($banners as $banner)
            <a href="{{ $banner->path_url }}">
                <div id="slider-{{ $banner->id }}" class="mx-auto">
                    <div class="object-fill text-white bg-center bg-cover" >
                        <img class="mx-auto xl:h-[540px] sm:h-auto" src="{{ Storage::url($banner->image_url) }}" alt="{{ $banner->description }}">
                    </div>
                    <br>
                </div>
            </a>
                
            @endforeach
        @else   
            <div id="slider" class="mx-auto">
                <div class="object-fill text-white bg-center bg-cover" >
                    <img class="mx-auto" src="/img/banner1.png" alt="banner optimajasa">
                </div>
                <br>
            </div> 
        @endif

        <div class="static flex w-24 mx-auto pb-2 xl:-mt-34 sm:-mt-2">
            @foreach ($banners as $banner)
                <div 
                    id="sButton{{ $banner->id }}" 
                    class="w-2 p-2 border-[1px] border-black bg-navbar-green rounded-full mx-auto"
                    onclick="sliderButton({{ $banner->id }}, {{ $loop->index }})">
                </div>
            @endforeach  
        </div>
    </div>
</div>

    @include('partials.home.about')
    @include('partials.home.vector-layanan', compact('totalOutsourcing', 'totalTransportFleet', 'totalTelecentre'))
    <div class="xl:bg-title-green sm:bg-none xl:mt-20 sm:-mt-20">
        <div class="xl:w-[1366px] sm:w-full xl:flex sm:hidden relative mx-auto ">
            <img usemap="POJ-Maps" class="mx-auto" src="/img/maps-new.png" alt="">
            <a href="{{ route('representative-office')}}" >
                <img class="absolute top-[183px] left-[187px] image-animation-map" src="/img/maps/medan-point.png" alt="" >
            </a>
            <a href="{{ route('representative-office')}}" >
                <img class="absolute top-[257px] left-[272px] image-animation-map" src="/img/maps/pekanbaru-point.png" alt="" >
            </a>
            <a href="{{ route('representative-office')}}" >
                <img class="absolute top-[330px] left-[349px] image-animation-map" src="/img/maps/palembang-point.png" alt="" >
            </a>
            <a href="{{ route('representative-office')}}" >
                <img class="absolute top-[430px] left-[418px] image-animation-map" src="/img/maps/jakarta-point.png" alt="" >
            </a>
            <a href="{{ route('representative-office')}}" >
                <img class="absolute top-[475px] left-[452px] image-animation-map" src="/img/maps/bandung-point.png" alt="" >
            </a>
            <a href="{{ route('representative-office')}}" >
                <img class="absolute top-[457px] left-[516px] image-animation-map" src="/img/maps/semarang-point.png" alt="" >
            </a>
            <a href="{{ route('representative-office')}}" >
                <img class="absolute top-[477px] left-[548px] image-animation-map" src="/img/maps/surabaya-point.png" alt="" >
            </a>
            <a href="{{ route('representative-office')}}" >
                <img class="absolute top-[497px] left-[614px] image-animation-map" src="/img/maps/denpasar-point.png" alt="" >
            </a>
            <a href="{{ route('representative-office')}}" >
                <img class="absolute top-[290px] left-[656px] image-animation-map" src="/img/maps/balikpapan-point.png" alt="" >
            </a>
            <a href="{{ route('representative-office')}}" >
                <img class="absolute top-[423px] left-[724px] image-animation-map" src="/img/maps/makassar-point.png" alt="" >
            </a>
            <a href="{{ route('representative-office')}}" >
                <img class="absolute top-[265px] left-[841px] image-animation-map" src="/img/maps/manado-point.png" alt="" >
            </a>
        </div>
        <div class="xl:hidden sm:flex">
            <img src="/img/map-poj.png" alt="">
        </div>
    </div>
    
    {{-- @include('partials.home.map') --}}
    @include('partials.home.client')
    @include('partials.home.news')
    
    
</div>
    
@endsection

<style>
    /* map */
    .image-animation-map {
        transition: transform .2s;
    }
    .image-animation-map:hover {
        -ms-transform: scale(1.4); /* IE 9 */
        -webkit-transform: scale(1.4); /* Safari 3-8 */
        transform: scale(1.4); 
    }
    /* font */
    .font-lato {
        font-family: 'Lato', sans-serif;
    }
    .font-family {
        font-family: 'Bebas Neue', cursive;
    }
</style>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script>
    const banners = {{ Js::from($banners) }} 
    
    function sliderButton(bannerId, index) {
        banners.forEach(banner => {
            if (bannerId !== banner.id) {
                $(`#slider-${banner.id}`).fadeOut(400);
                $(`#sButton${banner.id}`).removeClass("bg-light-green");
                $(`#sButton${banner.id}`).addClass("bg-light-green");
                
            } else {
                $(`#slider-${bannerId}`).delay(400).fadeIn(400);
                $(`#sButton${banner.id}`).removeClass("bg-light-green");
                $(`#sButton${bannerId}`).addClass("bg-navbar-green");
            }
        });
    }   

    let idx = 1
    setInterval(() => {
        sliderButton(banners[idx].id, idx)
        idx++
        if (idx > banners.length - 1) {
            idx = 0
        }    
    }, 8000);

    $(window).ready(function(){
        banners.forEach((banner, index) => {
            if (index === 0) {
                $(`#sButton${banner.id}`).addClass("bg-light-green");
            } else {
                $(`#slider-${banner.id}`).hide();        
            }
        });
    });
</script>