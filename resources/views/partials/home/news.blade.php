<div class="xl:w-[1206px] xl:mx-auto sm:w-full sm:mx-0 xl:px-4 sm:px-2 mt-20 mb-14">
    <div class="font-400 text-center uppercase xl:text-4xl sm:text-2xl text-title-green font-family">
        <h1>berita terbaru</h1>
    </div>
        <p class="text-center text-black xl:text-lg sm:text-sm font-lato font-400">Kami memahami pentingnya kualitas layanan dan tingkat hasil pekerjaan. <br>
        Berikut beberapa artikel untuk membantu anda mendapatkan penyedia jasa terbaik.</p>
    <div>
        <div class="slider-container2 ">
            <ul class="controls2" id="customize-controls2" aria-label="Carousel Navigation" tabindex="0">
                <li class="prev" data-controls="prev" aria-controls="customize" tabindex="-1">
                    <svg class="float-left mt-6" width="42" height="66" viewBox="0 0 42 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.48259e-05 33.2365C0.0921088 32.8691 0.3683 32.7221 0.570842 32.5016C7.75179 25.3362 14.9327 18.1708 22.1137 11.0054C25.4096 7.71669 28.7238 4.42796 32.0013 1.12086C32.5169 0.606414 32.7931 0.514549 33.3638 1.08411C35.7943 3.58281 38.28 6.04477 40.7842 8.48835C41.3181 9.02116 41.2445 9.27838 40.7657 9.77445C33.1981 17.2889 25.6489 24.8218 18.1181 32.373C17.1238 33.3651 17.1239 33.1447 18.0813 34.1001C25.6858 41.7064 33.2902 49.3127 40.9315 56.8824C41.4838 57.4335 41.5575 57.7275 40.9499 58.3154C38.4642 60.7223 36.0153 63.1842 33.5848 65.6462C33.1429 66.1055 32.8851 66.1239 32.4248 65.6646C21.7823 55.0267 11.1397 44.4072 0.478778 33.7693C0.313064 33.604 0.147346 33.4203 4.48259e-05 33.2365Z" fill="#E6F7CE"/>
                    </svg>
                </li>
                <li class="next" data-controls="next" aria-controls="customize" tabindex="-1">
                    <svg class="float-right mt-6" width="43" height="66" viewBox="0 0 43 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M42.3731 32.7635C42.2811 33.1309 42.0049 33.2779 41.8023 33.4984C34.6214 40.6638 27.4404 47.8292 20.2595 54.9946C16.9636 58.2833 13.6493 61.572 10.3719 64.8791C9.85632 65.3936 9.58012 65.4855 9.00933 64.9159C6.57885 62.4172 4.09314 59.9552 1.58902 57.5117C1.05505 56.9788 1.1287 56.7216 1.60743 56.2256C9.17505 48.7111 16.7242 41.1782 24.255 33.627C25.2493 32.6349 25.2493 32.8553 24.2919 31.8999C16.6874 24.2936 9.08298 16.6873 1.44171 9.11765C0.889334 8.56646 0.815685 8.2725 1.4233 7.68457C3.90902 5.27773 6.3579 2.81577 8.78838 0.353814C9.23028 -0.105506 9.48806 -0.123879 9.94838 0.335442C20.5909 10.9733 31.2334 21.5928 41.8944 32.2307C42.0601 32.396 42.2258 32.5797 42.3731 32.7635Z" fill="#E6F7CE"/>
                    </svg>
                </li>
            </ul>
            <div class="my-slider2">
                @foreach ($articles as $article)
                    <div class="mx-auto slider-item2 place-items-center">
                        <img class="mx-auto shadow-xl rounded-lg xl:w-[226px] sm:w-[200px] xl:h-[136px] sm:h-[100px]" src="{{ Storage::url($article->image_url)}}" alt="">
                        <div class="mt-6 xl:px-8 sm:px-2">
                            <p class="text-left text-gray-500 xl:text-lg sm:text-sm font-400 font-lato">{{ date('j F Y', strtotime($article->created_at)) }}</p>
                        </div>
                        <a href="/news/{{$article->slug}}">
                            <div class="mt-2 xl:px-8 sm:px-2">
                                <p  class="text-left text-black font-400 font-lato xl:text-lg sm:text-sm hover:text-title-green">{{$article->title}}</p>
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
    