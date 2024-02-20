<div class="xl:w-[1206px] xl:mx-auto sm:w-full sm:mx-0 xl:px-0 sm:px-2 xl:mt-12 sm:mt-0">
    <div class="text-center xl:text-4xl sm:text-2xl font-400 text-title-green font-family mb-10">
        <h1>KLIEN KAMI</h1>
    </div>

    <div class="grid grid-cols-5 gap-4 place-items-center ">
        <div class="mx-auto">
            <div class="">
                <img src="/img/pegadaian.png" alt="Pegadaian">
            </div>
            
        </div>
        <div class="mx-auto ">
            <div class="">
            <img src="/img/mandiri.png" alt="Mandiri">
            </div>
        </div>
        <div class="mx-auto">
            <div class="">
                <img src="/img/perkebunan-nusantara.png" alt="Perkebunan Nusantara">
            </div>
        </div>
        <div class="mx-auto ">
            <div class="">
                <img src="/img/perhutani.png" alt="Perhutani">
            </div>
        </div>
        <div class="mx-auto ">
            <div class="">
                <img src="/img/sasa.png" alt="Sasa">
            </div>
        </div>
    </div>

    
    <div class="slider-container ">
        <ul class="controls" id="customize-controls" aria-label="Carousel Navigation" tabindex="0">
            <li class="prev" data-controls="prev" aria-controls="customize" tabindex="-1">
                <i class="fas fa-angle-left fa-5x"></i>
            </li>
            <li class="next" data-controls="next" aria-controls="customize" tabindex="-1">
                <i class="fas fa-angle-right fa-5x"></i>          
            </li>
        </ul>
        <div class="my-slider ">
            @foreach ($clients as $client)
            <div class="mx-auto slider-item ">
                <img class="items-center" style="margin: auto;" src="{{ Storage::url($client->image_url)}}" alt="{{$client->name}}">
            </div>
            @endforeach
            
            
        </div>
        
    </div>
</div>

<style>
   
.slider-container {    
    
    background: #fff;
    margin: 2rem auto 0 auto;
    overflow: hidden;
    border-radius: 5px;    
    position:relative;
    &:before {
        content: '.slider-container';
        position: absolute;
        left: 0;
        top: 0;
        color: blue;
    }
}

.my-slider {
    display: flex;
    position: relative;    
}

.slider-item {
    background: #fff;
    padding: 1.5rem .75rem;
    position: relative;
    &:before {
        content: '.slider-item';
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
    padding: 0;
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
    }
}


</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
<script>
    
  const slider = tns({
    container: '.my-slider',
    loop: true,
    items: 1,
    slideBy: 'page',
    nav: false,    
    autoplay: true,
    speed: 400,
    autoplayButtonOutput: false,
    mouseDrag: true,
    lazyload: false,
    controlsContainer: "#customize-controls",
    responsive: {
        360: {
            items: 6,
        },
        1080: {
            items: 8,
        }
    }

  });

</script> 

