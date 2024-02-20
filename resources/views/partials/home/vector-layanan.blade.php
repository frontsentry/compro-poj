{{-- vector layanan --}}
<div class="xl:w-[1206px] xl:mx-auto sm:w-full xl:h-[450px] sm:h-[220px] sm:mx-0 xl:mt-[4rem] sm:mt-[25px] xl:mb-0 sm:mb-4">
    <div class="flex justify-between w-full ">
        <div class="mx-auto">
            <img class="image-animation" src="/img/outsourcing-vector.png" alt="">
            <div class="flex justify-center ">
                <h1 class="font-bold font-family xl:text-5xl sm:text-xl text-title-green">{{ $totalOutsourcing ? $totalOutsourcing : 0}}</h1>
            </div>
            <div>
                <p class="text-center text-black xl:text-lg sm:text-sm font-lato font-400">Outsourcing <br> (Security, Office Boy/Girl & Driver)</p>
            </div>
        </div>
        <div class="mx-auto">
            <img class="image-animation" src="/img/armada-vector.png" alt="">
            <div class="flex justify-center ">
                <h1 class="font-bold font-family xl:text-5xl sm:text-xl text-title-green">{{ $totalTransportFleet ? $totalTransportFleet : 0}}</h1>
            </div>
            <div>
                <p class="text-center text-black xl:text-lg sm:text-sm font-lato font-400">Armada <br> (Mobil & Motor)</p>
            </div>
        </div>
        <div class="mx-auto">
            <img class="image-animation" src="/img/tele-vector.png" alt="">
            <div class="flex justify-center ">
                <h1 class="font-bold font-family xl:text-5xl sm:text-xl text-title-green">{{ $totalTelecentre ? $totalTelecentre : 0}}</h1>
            </div>
            <div>
                <p class="text-center text-black xl:text-lg sm:text-sm font-lato font-400">Call Center <br> (Marketing & Collection)</p>
            </div>
        </div>
    </div>
</div>
<style>
    .image-animation {
        transition: transform .2s;
    }
    .image-animation:hover {
        -ms-transform: scale(1.1); /* IE 9 */
        -webkit-transform: scale(1.1); /* Safari 3-8 */
        transform: scale(1.1); 
    }
</style>