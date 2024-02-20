<div class="pt-24 text-footer-black">
    <div class="xl:w-[1206px] xl:mx-auto sm:w-full sm:mx-0 xl:px-0 sm:px-2 flex flex-row">
        <div class="flex flex-col xl:w-[71%] sm:w-full ">
            <div class="flex flex-row justify-between mt-4">
                <div class="xl:w-auto sm:w-auto">
                    <div class="flex flex-col text-justify font-400 font-lato xl:text-lg sm:text-sm">
                        Layanan Rental
                        <span class="mt-1 text-justify uppercase xl:text-6xl sm:text-3xl font-family font-400">motor</span>
                    </div>
                </div>
                <div class="flex items-center">
                    <img src="/img/motor/motor-logo.png" alt="">
                </div>
            </div>
            <img class="rounded-xl w-full mt-4 shadow-2xl xl:h-[428px] sm:h-auto" src="/img/motor/motor-thumbnail.png" alt="">
            
            <div class="mt-6">
                <h1 class="uppercase text-title-green xl:text-4xl sm:text-3xl font-family">jasa Rental <span class="text-footer-black">motor</span></h1>
                <p class="text-justify font-lato font-400 text-normal xl:mt-2 sm:mt-0">
                    Optima Rent a Motorcycle merupakan penyedia layanan sewa transportasi kendaraan roda dua yang telah menyediakan lebih dari 1.000 unit kendaraan dari berbagai merek dan tipe untuk mendukung kebutuhan transportasi bisnis mitra kami.
                </p>
            </div>
        </div>


        <div class="xl:w-[29%] sm:w-full xl:block sm:hidden xl:pl-24 sm:pl-0 sm:px-2 sm:ml-0 xl:mt-[125px] sm:mt-[48px] font-lato font-400">
            <div style="background-color: #E7F0EA;" class="w-full pt-2 pb-6 px-2 rounded-lg shadow-lg">
                <h1 class="ml-1 text-navbar-green text-md">Layanan Rental</h1>
                <div class="px-4">
                    <a href="{{ route('car') }}" class="">
                        <div class="w-full px-4 mt-3 text-lg rounded-md shadow-lg bg-side-gray hover:bg-light-green">
                            Mobil
                        </div>
                    </a>
                    <a href="{{ route('motorcycle') }}" class="">
                        <div class="w-full px-4 mt-3 text-lg rounded-md shadow-lg bg-light-green">
                            Motor
                        </div>
                    </a>
                    <a href="{{ route('office-equipment') }}" class="">
                        <div class="w-full px-4 mt-3 text-lg rounded-md shadow-lg bg-side-gray hover:bg-light-green">
                            Alat Kantor
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
                    <a href="{{ route('tele-center')}}" class="">
                        <div class="w-full px-4 mt-3 text-lg rounded-md shadow-lg bg-side-gray hover:bg-light-green">
                            Call Center
                        </div>
                    </a>
                    <a target="_blank" href="https://sharepa.id/rental/" class="">
                        <div class="w-full px-4 mt-3 text-lg rounded-md shadow-lg bg-side-gray hover:bg-light-green">
                            Share_PA
                        </div>
                    </a>
                    <a target="_blank" href="https://tip-o.com/" class="">
                        <div class="w-full px-4 mt-3 text-lg rounded-md shadow-lg bg-side-gray hover:bg-light-green">
                            Tip-O
                        </div>
                    </a>
                    <a href="{{ route('expedition')}}" class="">
                        <div class="w-full px-4 mt-3 mb-6 text-lg rounded-md shadow-lg bg-side-gray hover:bg-light-green">
                            Ekspedisi
                        </div>
                    </a>
                </div> 
            </div>
        </div>
    </div>

    <div class="xl:w-[1206px] xl:mx-auto sm:w-full sm:mx-0 xl:px-0 sm:px-2 flex xl:flex-row sm:flex-col xl:mt-24 sm:mt-12 font-lato">
        <div class="flex flex-col px-8 xl:w-1/3 sm:w-full">
            <div class="mx-auto">
                <img src="/img/sec-1.png" alt="">
            </div>
            <h1 style="font-weight: 800;" class="p-4 mx-auto text-2xl">Layanan Prima</h1>
            <p class="text-center font-400 text-normal">
                Menyediakan perbaikan dan perawatan kendaraan, perlindungan asuransi, penggantian ban dan accu, motor backup serta perpanjangan STNK.
            </p>
        </div>
        <div class="flex flex-col px-8 xl:w-1/3 sm:w-full xl:mt-0 sm:mt-8">
            <div class="mx-auto">
                <img src="/img/sec-3.png" alt="">
            </div>
            <h1 style="font-weight: 800;" class="p-4 mx-auto text-2xl">Jaringan Luas</h1>
            <p class="text-center font-400 text-normal">
                Jaringan service dengan bengkel resmi di seluruh Indonesia.
            </p>
        </div>
        <div class="flex flex-col px-8 xl:w-1/3 sm:w-full xl:mt-0 sm:mt-8">
            <div class="mx-auto">
                <img src="/img/sec-2.png" alt="">
            </div>
            <h1 style="font-weight: 800;" class="p-4 mx-auto text-2xl">Terpercaya</h1>
            <p class="text-center font-400 text-normal">
                Lebih dari 7 tahun melayani berbagai mitra bisnis di seluruh Indonesia.
            </p>
        </div>
        
    </div>

    @if (count($galleries) > 0)
        @include('partials.galleries.slider', ['galleries' => $galleries])        
    @endif
</div>
