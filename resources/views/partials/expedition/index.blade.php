<div class="flex flex-col pt-24 text-footer-black">
    <div class="xl:w-[1206px] xl:mx-auto sm:w-full sm:mx-0 xl:px-0 sm:px-2 flex flex-row">
        <div class="flex flex-col xl:w-[71%] sm:w-full">
            <div class="flex flex-row justify-between mt-4">
                <div class="xl:w-auto sm:w-auto ">
                    <div class="flex flex-col text-justify font-400 font-lato xl:text-lg sm:text-sm">
                        Layanan 
                        <span class="mt-1 text-justify uppercase xl:text-6xl sm:text-3xl font-family font-400">ekspedisi</span>
                    </div>
                </div>
                <div class="flex items-center">
                    <img src="/img/expedition/expedition-logo.png" alt="">
                </div>
            </div>
            <img class="rounded-xl w-full mt-4 shadow-2xl xl:h-[428px] sm:h-auto" src="/img/expedition/expedition-thumbnail.png" alt="">
            
            <div class="mt-6">
                <h1 class="uppercase text-title-green xl:text-4xl sm:text-3xl font-family">jasa <span class="text-footer-black">ekspedisi</span></h1>
                <p class="text-justify font-lato font-400 text-normal xl:mt-2 sm:mt-0">
                    Optima Kurir Express merupakan layanan penyedia jasa pengiriman paket dan dokumen ke seluruh indonesia.
                </p>
            </div>
        </div>


        <div class="xl:w-[29%] sm:w-full xl:block sm:hidden xl:pl-24 sm:pl-0 sm:px-2 sm:ml-0 xl:mt-[125px] sm:mt-[48px] font-lato font-400">
            <div style="background-color: #E7F0EA;" class="w-full p-2 pb-6 rounded-lg shadow-lg">
                <h1 class="ml-1 text-navbar-green text-md">Layanan Ekspedisi</h1>
                <div class="px-4">
                    <a href="{{ route('expedition') }}" class="">
                        <div class="w-full px-4 mt-3 text-lg rounded-md shadow-lg bg-light-green">
                            Ekspedisi
                        </div>
                    </a>
                    
                </div> 
            </div>

            <div style="background-color: #E7F0EA;" class="w-full p-2 mt-6 rounded-lg shadow-lg">
                <h1 class="ml-1 font-bold text-navbar-green text-md">Produk & Layanan Lainnya</h1>
                <div class="px-4">
                    <a href="{{ route('security')}}" class="">
                        <div class="w-full px-4 mt-3 text-lg rounded-md shadow-lg bg-side-gray hover:bg-light-green">
                            Outsourcing
                        </div>
                    </a>
                    <a href="{{ route('car')}}" class="">
                        <div class="w-full px-4 mt-3 text-lg rounded-md shadow-lg bg-side-gray hover:bg-light-green">
                            Rental
                        </div>
                    </a>
                    <a href="{{ route('tele-center')}}" class="">
                        <div class="w-full px-4 mt-3 text-lg rounded-md shadow-lg bg-side-gray hover:bg-light-green ">
                            Call Center
                        </div>
                    </a>
                    <a target="_blank" href="https://sharepa.id/rental/" class="">
                        <div class="w-full px-4 mt-3 text-lg rounded-md shadow-lg bg-side-gray hover:bg-light-green">
                            Share_PA
                        </div>
                    </a>
                    <a target="_blank" href="https://tip-o.com" class="">
                        <div class="w-full px-4 mt-3 mb-6 text-lg rounded-md shadow-lg bg-side-gray hover:bg-light-green">
                            Tip-O
                        </div>
                    </a>
                    
                </div> 
            </div>
        </div>
    </div>

    <div class="xl:w-[1206px] xl:mx-auto sm:w-full sm:mx-0 xl:px-0 sm:px-2 flex xl:flex-row sm:flex-col xl:mt-24 sm:mt-12 font-lato">
        <div class="flex flex-col px-8 xl:w-1/3 sm:w-full xl:mt-0 sm:mt-8">
            <div class="mx-auto">
                <img src="/img/sec-3.png" alt="">
            </div>
            <h1 style="font-weight: 800;" class="p-4 mx-auto text-2xl">Jangkauan Luas</h1>
            <p class="text-center font-400 text-normal">
                Melayani pengiriman ke seluruh Indonesia.
            </p>
        </div>
        <div class="flex flex-col px-8 xl:w-1/3 sm:w-full xl:mt-0 sm:mt-8">
            <div class="mx-auto">
                <img src="/img/sec-2.png" alt="">
            </div>
            <h1 style="font-weight: 800;" class="p-4 mx-auto text-2xl">Pengiriman Cepat</h1>
            <p class="text-center font-400 text-normal">
                Sampai dalam 1 hari (tergantung pilihan layanan).
            </p>
        </div>
        <div class="flex flex-col px-8 xl:w-1/3 sm:w-full">
            <div class="mx-auto">
                <img src="/img/sec-1.png" alt="">
            </div>
            <h1 style="font-weight: 800;" class="p-4 mx-auto text-2xl">Jaminan Kualitas</h1>
            <p class="text-center font-400 text-normal">
                Berkualitas dengan layanan 
kurir terbaik.
            </p>
        </div>
    </div>

    

    <div class="xl:w-[1206px] xl:mx-auto sm:w-full sm:mx-0 xl:px-0 sm:px-4 xl:mt-24 sm:mt-12 mx-auto">
        
        @if (count($galleries) > 0)
            @include('partials.galleries.slider', ['galleries' => $galleries])        
        @endif
    </div>
    
</div>
<style>
    .dot {
        height: 15px;
        width: 15px;
        background-color: #018400;
        border-radius: 50%;
        display: inline-block;
    }
    @media screen and (max-width: 1280px) {
        .dot {
        height: 5px;
        width: 5px;
        background-color: #018400;
        border-radius: 50%;
        display: inline-block;
    }
    }
</style>