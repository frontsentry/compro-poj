
<div class="">  
    <div class="xl:w-[1206px] xl:h-[550px] sm:h-[100px] sm:w-full mx-auto pt-24 sliderAx xl:px-1 sm:px-1 ">
        {{-- TODO: handle empty banner, set default --}}
        @if (count($banners) > 0)
            @foreach ($banners as $banner)
            <a href="{{ $banner->path_url }}">
                <div id="slider-{{ $banner->id }}" class="mx-auto">
                    <div class="xl:object-fill sm:object-contain text-white bg-center bg-cover" >
                        <img class="mx-auto" src="{{ Storage::url($banner->image_url) }}" alt="{{ $banner->description }}">
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