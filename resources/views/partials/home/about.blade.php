<div class="xl:h-[1000px] -mt-12 ">
    <div class="bg-auto bg-center sm:px-1 xl:mt-6 sm:mt-1 bg-no-repeat text-white background-custom2" >
        
        {{-- Tentang POJ --}}
        <div class="xl:w-[1206px] xl:mx-auto sm:w-full sm:mx-0">
            <div class=" flex xl:flex-row sm:flex-col xl:px-0 sm:px-2 xxl:px-56">
                <div class="flex flex-col xl:w-2/3 sm:w-full xl:pr-36 sm:pr-0 xl:mt-20 sm:mt-24">
                    <div class="xl:text-4xl sm:text-2xl font-medium text-title-green font-family">
                        <h1>TENTANG PESONNA OPTIMA JASA</h1>
                    </div>
                    <div class="xl:text-lg sm:text-sm font-lato leading-[21px] font-400 mt-4">
                        PT Pesonna Optima Jasa didirikan pada
                        tanggal 19 November 2014
                        dan bergerak
                        dibidang jasa umum dengan lini bisnis utama 
                        pengadaan tenaga Outsourcing, Rental
                        kendaraan dan Tele Centre.
                    </div>
                    <div class="xl:text-lg sm:text-sm font-lato font-400 leading-[21px] xl:mt-6 sm:mt-2">
                        PT Pesonna Optima Jasa memiliki 11 Kantor
                        Perwakilan dan
                        15 Kantor Area yang tersebar
                        di seluruh indonesia, untuk 
                        memberikan
                        layanan terbaik kepada seluruh mitra bisnis.
                    </div>
                </div>
                <div class="xl:w-[435px] xl:h-[251px] sm:w-full sm:h-[200px] xl:ml-6 sm:ml-0 xl:mt-14 sm:mt-2">
                    <video class="mx-auto rounded-xl xl:w-full xl:h-full sm:w-[351px] sm:h-[197px]" controls>
                        <source src="https://optimajasa-assets.s3.ap-southeast-1.amazonaws.com/POJ-compro-video.mp4" type="video/mp4">
                    </video>
                    <!-- {{-- <iframe controls class="mx-auto rounded-xl w-full h-full" src="https://optimajasa-assets.s3.ap-southeast-1.amazonaws.com/POJ-compro-video.mp4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}} -->
                </div>
            </div>
        </div>
        

        {{-- produk & layanan --}}
        <div class="xl:w-[1206px] xl:mx-auto sm:w-full sm:mx-0 xl:mt-20 sm:mt-8 ">
            <h1 class="xl:text-4xl sm:text-2xl font-medium font-family uppercase">
                produk & layanan pesonna optima jasa
            </h1>
            <div class="grid xl:grid-rows-2 sm:grid-rows-3 grid-flow-col gap-4 mt-8">
                <a href="{{ route('security') }}" class="image-animation">
                    <img src="/img/grid-1.png" alt="out sourcing">
                </a>
                <a target="_blank" href="{{route('information-page')}}" class="image-animation">
                    <img src="/img/grid-2.png" alt="share pa">
                </a>
                <a href="{{ route('car') }}" class="image-animation">
                    <img src="/img/grid-3.png" alt="rent">
                </a>
                <a href="{{ route('expedition') }}" class="image-animation">
                    <img src="/img/grid-4.png" alt="kurir">
                </a>
                <a href="{{ route('tele-center') }}" class="image-animation">
                    <img class=" rounded-xl shadow-xl" src="/img/grid-5x5.png" alt="tele center">
                </a>
                <a target="_blank" href="https://tip-o.com/" class="image-animation">
                    <img src="/img/grid-6.png" alt="tip-o">
                </a>
            </div>
        </div>
    </div>
</div>
<style>
    .image-animation {
        transition: transform .2s;
    }
    .image-animation:hover {
        -ms-transform: scale(1.2); /* IE 9 */
        -webkit-transform: scale(1.2); /* Safari 3-8 */
        transform: scale(1.2); 
    }
    .background-custom2 {
        background: url('/img/bg-onlygreen2.png') no-repeat center ;
        background-position-y: 22% !important
        
    }

    @media screen and (max-width: 1280px) {
        .background-custom2 {
            background: url('/img/bg-onlygreen2.png') no-repeat center ;
            background-position-y: 24% !important;
            
        }
    }
</style>