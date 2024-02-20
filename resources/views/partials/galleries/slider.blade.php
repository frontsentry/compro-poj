<div class="xl:w-[1206px] xl:mx-auto sm:w-full sm:mx-0 xl:px-14 sm:px-2 mt-20 mb-14">
    <div class="font-bold text-center uppercase xl:text-4xl sm:text-2xl text-navbar-green font-family">
        <h1>Aktivitas Kami</h1>
    </div>
    <div>
        <div class="slider-container2 ">
            <ul class="controls2" id="customize-controls2" aria-label="Carousel Navigation" tabindex="0">
                <li class="prev" data-controls="prev" aria-controls="customize" tabindex="-1">
                    
                </li>
                <li class="next" data-controls="next" aria-controls="customize" tabindex="-1">
                    
            </ul>

            <div class="my-slider2">
                @foreach ($galleries as $gallery)
                    <div class="mx-auto slider-item2 place-items-center">
                        <img class="mx-auto rounded-lg xl:w-[250px] sm:w-[200px] xl:h-[150px] sm:h-[100px]" src="{{ Storage::disk('s3')->url($gallery->attachment)}}" alt="">
                        
                        <a href="#">
                            <div class="mt-2 xl:px-10 sm:px-2">
                                <p  class="text-left text-black font-400 font-lato xl:text-xl sm:text-sm hover:text-title-green">{{$gallery->title}}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
<style>
    .slider-container2 {    
        background: #fff;
        margin: 2rem auto 0 auto;
        overflow: hidden;
        border-radius: 5px;    
        position:relative;
        &:before {
            content: '.slider-container2';
            position: absolute;
            left: 0;
            top: 0;
            color: blue;
        }
    }
    
    .my-slider2 {
        display: flex;
        position: relative;    
    }
    
    .slider-item2 {
        background: #fff;
        padding: 0.5rem .10rem;
        position: relative;
        &:before {
            content: '.slider-item2';
            left: 0;
            top: 0;
            color: blue;
        }
        
        &:hover {
            cursor: pointer;
        }
    }
    
    
    .controls2 {
        margin: 0;
       
    }
</style>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script>
    const slider2 = tns({
      container: '.my-slider2',
      loop: true,
      items: 1,
      slideBy: 'page',
      nav: false,    
      autoplay: true,
      speed: 400,
      autoplayButtonOutput: false,
      mouseDrag: true,
      lazyload: false,
      controlsContainer: "#customize-controls2",
      responsive: {
          360: {
            items: 2,
          },
          1080: {
              items: 4,
          }
      }
    });
</script>
    