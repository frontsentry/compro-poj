@extends ('layouts.main')

@section ('content')
<div class="xl:pt-32 sm:pt-24 xl:w-[1206px] xl:mx-auto sm:w-full sm:mx-0 xl:px-0 sm:px-2">
    <div class="flex w-full pt-4 text-lg font-bold text-left xl:flex-row sm:flex-col text-footer-black">
        <div class="flex flex-wrap xl:w-2/3 sm:w-full">
            <div class="mb-8">
                <div class="flex flex-col w-full mb-2">
                    <div class="font-family font-400 xl:text-5xl sm:text-3xl">
                        {{$article->title}}
                    </div>
                    <div class="mt-6">
                        <img class="xl:w-[742px] xl:h-[445px] rounded" src="{{ Storage::url($article->image_url)}}" alt="">
                    </div>
                    <div class="border-t-2 border-b-2 border-[#E6F6CE] mt-6">
                        <div class="flex justify-between">
                            <p class="xl:my-3 sm:my-1 xl:text-lg sm:text-[14px] font-lato font-400 text-navbar-child-green group-hover:text-footer-black">{{ date('j F Y', strtotime($article->created_at)) }}</p>
                            <div class="flex flex-row items-center gap-6">
                                <a href="">
                                    <img class="" src="/img/ic-fb.png" alt="">
                                </a>
                                <a href="">
                                    <img class="" src="/img/ic-twit.png" alt="">
                                </a>
                                <a href="">
                                    <img class="" src="/img/ic-pin.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 text-lg text-left font-lato font-400">
                        {!! $article->content !!}
                    </div>
                </div>                
            </div>
           
        </div>

        {{-- SIDEBAR DESKTOP VIEW --}}
        <div class="w-[343px] xl:flex flex-col sm:hidden px-4 pt-2 pb-4 ml-6 ">
            <span class="font-[800] font-lato text-xl text-navbar-child-green">Berita <span class="text-footer-black">Lainnya</span> </span>
            @foreach ($anotherArticles as $article)
            <a href="/news/{{ $article->slug }}" class="group">
                <div class="flex flex-row w-full mt-6">
                    <div class="w-[55%] pr-4">
                        <img class="w-[180px] h-[108px] rounded" src="{{ Storage::url($article->image_url)}}" alt="">
                    </div>
                    
                    <div class="flex flex-col w-[45%]">
                        <div class="flex font-lato font-400 text-gray-500 text-[16px] ">
                            {{ date('j F Y', strtotime($article->created_at)) }}
                        </div>
                        <div class="flex flex-warp font-lato font-bold text-[16px] leading-[19px] group-hover:text-navbar-child-green">
                            {{ strip_tags(Str::limit ($article->title,52, '...'))}}
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
            
        </div>

        {{-- SIDEBAR MOBILE VIEW --}}
        <div class="slider-containerx">
            <ul class="controls" id="customize-controlsx" aria-label="Carousel Navigation" tabindex="0">
                <li class="prev" data-controls="prev" aria-controls="customize" tabindex="-1">
                    
                </li>
                <li class="next" data-controls="next" aria-controls="customize" tabindex="-1">
                    
                </li>
            </ul>
            
            <div class="flex-col w-full px-1 pt-2 pb-4 xl:hidden sm:flex ">
                <span class="font-[800] font-lato text-xl text-navbar-child-green">Berita 
                    <span class="text-footer-black">Lainnya</span> 
                </span>
                <div class="my-sliderx">
                    @foreach ($anotherArticles as $article)
                        <a href="/news/{{ $article->slug }}" class="group slider-itemx">
                            <div class="flex flex-col w-full mt-1 ">
                                <div class="w-full pr-4">
                                    <img class="w-[200px] h-[108px] rounded" src="{{ Storage::url($article->image_url)}}" alt="">
                                </div>
                                
                                <div class="flex flex-col w-full">
                                    <div class="flex font-lato font-400 text-gray-500 text-[14px] ">
                                        {{ date('j F Y', strtotime($article->created_at)) }}
                                    </div>
                                    <div class="flex flex-warp font-lato font-bold text-[16px] leading-[19px] group-hover:text-navbar-child-green">
                                        {{ strip_tags(Str::limit ($article->title,52, '...'))}}
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
                
            </div>
           
        </div>
        
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
<script>
    
    const sliderx = tns({
    container: '.my-sliderx',
    loop: true,
    items: 1,
    slideBy: 'page',
    nav: false,    
    autoplay: true,
    speed: 400,
    autoplayButtonOutput: false,
    mouseDrag: true,
    lazyload: false,
    controlsContainer: "#customize-controlsx",
    responsive: {
        360: {
            items: 2,
        },
        1080: {
            items: 8,
        }
    }

    });

</script> 
@endsection

<style>
   
    .slider-containerx {    
        
        background: #fff;
        margin: 0 ;
        overflow: hidden;
        border-radius: 5px;    
        position:relative;
        &:before {
            content: '.slider-containerx';
            position: absolute;
            left: 0;
            top: 0;
            color: blue;
        }
    }
    
    .my-sliderx {
        display: flex;
        position: relative;    
    }
    
    .slider-itemx {
        background: #fff;
        padding: 0.5rem .05rem;
        position: relative;
        &:before {
            content: '.slider-itemx';
            left: 0;
            top: 0;
            color: blue;
        }
        
        &:hover {
            cursor: pointer;
        }
    }
    
    
    .controls {
        margin: 0;
        /* padding: 0;
        list-style: none;
        position: absolute;
        left: 0;    
        background: #fff;
        width: 100%;    
        top: 50%;
        transform: translatey(-50%);
        display: flex;
        align-items: center;    
        justify-content: space-between;
        &:focus {
            outline: none;
        }
    
        li:hover {
            cursor: pointer;        
        } */
    }
    
    
    </style>
    
    

