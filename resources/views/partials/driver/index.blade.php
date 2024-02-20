<div class="pt-24 text-footer-black">
    <div class="xl:w-[1206px] xl:mx-auto sm:w-full sm:mx-0 xl:px-0 sm:px-2 flex flex-row">
        <div class="flex flex-col xl:w-[71%] sm:w-full">
            <div class="flex flex-row justify-between mt-4">
                <div class="xl:w-[213px] sm:w-44">
                    <div class="flex flex-col text-justify font-semi-bold xl:text-lg sm:text-sm">
                        Layanan Outsourcing
                        <span class="mt-1 text-justify uppercase xl:text-6xl sm:text-3xl font-family font-400">driver</span>
                    </div>
                </div>
                <div class="flex items-center">
                    <img src="/img/driver/driver-logo.png" alt="">
                </div>
            </div>
            
            <iframe class="rounded-lg w-full mt-4 shadow-xl xl:h-[428px] sm:h-auto" width="560" height="315" src="https://www.youtube.com/embed/9hNbAO_pkf8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            
            <div class="mt-6">
                <h1 class="uppercase text-title-green xl:text-4xl sm:text-3xl font-family">jasa Outsourcing <span class="text-footer-black">Driver</span> </h1>
                <p class="text-left font-lato font-400 text-normal xl:mt-2 sm:mt-0">
                    Optima Driver Service merupakan penyedia jasa pengemudi kendaraan roda empat yang memiliki lebih dari 1.100 Tenaga Pengemudi (Driver) dengan lisensi dan kemampuan mengemudi yang baik.
                </p>
            </div>
        </div>


        <div class="xl:w-[29%] sm:w-full xl:block sm:hidden xl:pl-24 sm:pl-0 sm:px-2 sm:ml-0 xl:mt-[125px] sm:mt-[48px] font-lato font-400">
            <div style="background-color: #E7F0EA;" class="w-full pt-2 pb-6 px-2 rounded-lg shadow-lg">
                <h1 class="ml-1 text-navbar-green font-lato text-md">Layanan Outsourcing</h1>
                <div class="px-4">
                    <a href="{{ route('security') }}" class="">
                        <div class="w-full px-4 mt-3 text-lg rounded-md shadow-lg bg-side-gray hover:bg-light-green">
                            Security
                        </div>
                    </a>
                    <a href="{{ route('cleaning-service') }}" class="">
                        <div class="w-full px-4 mt-3 text-lg rounded-md shadow-lg bg-side-gray hover:bg-light-green">
                            Cleaning Service
                        </div>
                    </a>
                    <a href="{{ route('driver') }}" class="">
                        <div class="w-full px-4 mt-3 text-lg rounded-md shadow-lg bg-light-green">
                            Driver
                        </div>
                    </a>
                    
                </div> 
            </div>

            <div style="background-color: #E7F0EA;" class="w-full p-2 mt-6 rounded-lg shadow-lg font-lato font-400">
                <h1 class="ml-1 text-navbar-green text-md">Produk & Layanan Lainnya</h1>
                <div class="px-4">
                    <a href="{{ route('car')}}" class="">
                        <div class="w-full px-4 mt-3 text-lg rounded-md shadow-lg bg-side-gray hover:bg-light-green">
                            Rental
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
            <h1 style="font-weight: 800;" class="p-4 mx-auto text-2xl">Profesional</h1>
            <p class="text-center font-400 text-normal">
                Merekrut serta melatih talenta Pengemudi (Driver) terbaik dan berpengalaman dalam bidang ini.
            </p>
        </div>
        <div class="flex flex-col px-8 xl:w-1/3 sm:w-full xl:mt-0 sm:mt-8">
            <div class="mx-auto">
                <img src="/img/sec-2.png" alt="">
            </div>
            <h1 style="font-weight: 800;" class="p-4 mx-auto text-2xl">Berpengalaman</h1>
            <p class="text-center font-400 text-normal">
                Lebih dari 7 tahun mensupport berbagai mitra perusahaan dalam menjalankan bisnis.
            </p>
        </div>
        <div class="flex flex-col px-8 xl:w-1/3 sm:w-full xl:mt-0 sm:mt-8">
            <div class="mx-auto">
                <img src="/img/sec-3.png" alt="">
            </div>
            <h1 style="font-weight: 800;" class="p-4 mx-auto text-2xl">Layanan Prima</h1>
            <p class="text-center font-400 text-normal">
                Driver kami juga siap melayani dengan sopan, ramah dan berpenampilan rapi.
            </p>
        </div>
    </div>

    @if (count($galleries) > 0)
        @include('partials.galleries.slider', ['galleries' => $galleries])        
    @endif 
    
</div>
