 <!-- Header Navbar -->
 <div class="z-50 w-full fixed bg-white border-b-2 border-gray-200 shadow-lg xl:py-4 sm:py-1 rounded-b xl:px-[80px] sm:px-0">
    <nav class="w-[1206px] mx-auto">
      
      <div class="flex items-center xl:mx-auto sm:mx-2 ">
        <a href="/" class="flex flex-nowrap items-center xl:w-[196px]">
            <img class="-ml-2" src="/img/logo-POJ.png" alt="POJ Logo"/>
        </a>
        
        <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
        <div class="sm:float-right xl:float-none xl:hidden sm:flex">
          <label for="openSidebarMenu" class="sidebarIconToggle">
            <div class="spinner diagonal part-1"></div>
            <div class="spinner horizontal"></div>
            <div class="spinner diagonal part-2"></div>
          </label>
        </div>
        {{-- DESKTOP MENU NAVBAR --}}
        <div class="items-center justify-end w-full xl:flex xl:ml-0 flex-nowrap sm:hidden sm:pl-0" >
          <ul id="" class="flex  font-bold flex-nowrap font-lato gap-x-8">
            <div>
              <a href="{{ route('home') }}" class="flex flex-row items-center py-2 pl-3 pr-4 text-lg rounded text-navbar-green md:bg-transparent md:p-0 " aria-current="page">
                Beranda 
              </a>
            </div>
            <div>
              <div class="dropdown">
                  <a href="javascript:void(0)" class="flex flex-row items-center py-2 pl-3 pr-4 text-lg border-b border-gray-100 group text-navbar-green hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:p-0 ">
                    <div class="flex flex-col">
                      <div class="flex flex-row items-center">
                        Tentang Kami
                      </div>
                      <div class="w-1/2 mt-2 border-2 border-white rounded group-hover:border-light-green"></div>
                    </div>
                  </a>
                  <ul class="absolute hidden pt-4 text-white dropdown-menu ">
                    <li class="relative"> <img class="absolute left-[40%] " src="/img/arrow-navbar.png" alt=""> <a class="block px-4 py-2 text-lg whitespace-no-wrap border-t-8 rounded-t border-t-white bg-navbar-child-green bg-opacity-90 hover:bg-white hover:text-navbar-child-green" href="{{ route('profile') }}">Profile</a></li>
                    <li class=""><a class="block px-4 py-2 text-lg whitespace-no-wrap bg-navbar-child-green bg-opacity-90 hover:bg-white hover:text-navbar-child-green" href="{{ route('appreciation') }}">Penghargaan</a></li>
                    <li class=""><a class="block px-4 py-2 text-lg whitespace-no-wrap bg-navbar-child-green bg-opacity-90 hover:bg-white hover:text-navbar-child-green" href="{{ route('certification') }}">Sertifikasi</a></li>
                    <li class=""><a class="block px-4 py-2 text-lg whitespace-no-wrap bg-navbar-child-green bg-opacity-90 hover:bg-white hover:text-navbar-child-green" href="{{ route('article.home') }}">Berita</a></li>
                    <li class=""><a class="block px-4 py-2 text-lg whitespace-no-wrap rounded-b bg-navbar-child-green bg-opacity-90 hover:bg-white hover:text-navbar-child-green" href="{{ route('gallery') }}">Galeri Kegiatan</a></li>
                  </ul>
              </div>
            </div>
            <div>
                <div class="dropdown">
                    <a href="javascript:void(0)" class="flex flex-row items-center py-2 pl-3 pr-4 text-lg border-b border-gray-100 group text-navbar-green hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:p-0 ">
                      <div class="flex flex-col">
                        <div class="flex flex-row items-center">
                          Produk & Layanan
                        </div>
                        <div class="w-1/2 mt-2 border-2 border-white rounded group-hover:border-light-green"></div>
                      </div>
                    </a>
                    <div class="absolute flex-row hidden pt-4 text-white dropdown-menu">
                        <div class="relative flex flex-row border-t-8 rounded  bg-opacity-40 border-t-white">
                          
                          <div class="flex flex-col ">
                            <div id="parent-btn2" class="dropdown2">
                              <div class="relative ">
                                <img class="absolute left-[40%] -top-2" src="/img/arrow-navbar.png" alt=""><a class="block px-4 py-2 text-lg font-bold whitespace-no-wrap rounded-tl pointer-events-none bg-navbar-child-green bg-opacity-90" href="javascript:void(0)">
                                  Outsourcing</a>
                              </div>  
                              
                              <div class="dropdown-menu2 hidden">
                                <div class="group ">
                                  <div class=""><a class="flex flex-row items-center px-4 py-2 text-lg whitespace-no-wrap bg-navbar-child-green bg-opacity-90 group-hover:bg-white group-hover:text-navbar-child-green" href="{{ route('security') }}">
                                  <svg class="mr-2 fill-white group-hover:fill-navbar-child-green" width="14" height="14" viewBox="0 0 14 14"  xmlns="http://www.w3.org/2000/svg">
                                  <circle cx="7" cy="7" r="7" />
                                  </svg>Security</a>
                                  </div>
                                </div>
                                <div class="group">
                                    <div class=""><a class="flex flex-row items-center px-4 py-2 text-lg whitespace-no-wrap bg-navbar-child-green bg-opacity-90 group-hover:bg-white group-hover:text-navbar-child-green" href="{{ route('cleaning-service') }}">
                                    <svg class="mr-2 fill-white group-hover:fill-navbar-child-green" width="14" height="14" viewBox="0 0 14 14"  xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="7" cy="7" r="7" />
                                    </svg>Cleaning Service</a>
                                    </div>
                                </div>
                                <div class="group">
                                    <div class=""><a class="flex flex-row items-center px-4 py-2 text-lg whitespace-no-wrap bg-navbar-child-green bg-opacity-90 group-hover:bg-white group-hover:text-navbar-child-green" href="{{ route('driver') }}">
                                    <svg class="mr-2 fill-white group-hover:fill-navbar-child-green" width="14" height="14" viewBox="0 0 14 14"  xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="7" cy="7" r="7" />
                                    </svg>Driver</a>
                                    </div>
                                </div>
                                <div class=""><a class="block px-4 py-2 text-lg font-semibold whitespace-no-wrap rounded-bl bg-navbar-child-green hover:bg-white hover:text-navbar-child-green bg-opacity-90" target="_blank" href="{{route('information-page')}}">Share_Pa <br/>Sewa Mobil Harian</a></div> 
                              </div>
                            </div>
                              <div id="btn-2" class=""><a class="block px-4 py-2 text-lg font-semibold whitespace-no-wrap rounded-bl bg-navbar-child-green hover:bg-white hover:text-navbar-child-green bg-opacity-90" target="_blank" href="{{route('information-page')}}">Share_Pa <br/>Sewa Mobil Harian</a></div>    
                          </div>

                          <div class="flex flex-col ">
                            <div id="parent-btn3" class="dropdown3">
                              <div class="">
                                <a class="block px-4 py-2 text-lg font-bold whitespace-no-wrap pointer-events-none bg-navbar-child-green bg-opacity-90" href="javascript:void(0)">
                                  Rental</a>
                                </div>  
                              <div class="dropdown-menu3 hidden">
                                  <div class="group">
                                    <div class=""><a class="flex flex-row items-center px-4 py-2 text-lg whitespace-no-wrap bg-navbar-child-green bg-opacity-90 group-hover:bg-white group-hover:text-navbar-child-green" href="{{ route('car') }}">
                                    <svg class="mr-2 fill-white group-hover:fill-navbar-child-green" width="14" height="14" viewBox="0 0 14 14"  xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="7" cy="7" r="7" />
                                    </svg>Mobil</a>
                                    </div>
                                  </div>
                                  <div class="group">
                                      <div class=""><a class="flex flex-row items-center px-4 py-2 text-lg whitespace-no-wrap bg-navbar-child-green bg-opacity-90 group-hover:bg-white group-hover:text-navbar-child-green" href="{{ route('motorcycle') }}">
                                      <svg class="mr-2 fill-white group-hover:fill-navbar-child-green" width="14" height="14" viewBox="0 0 14 14"  xmlns="http://www.w3.org/2000/svg">
                                      <circle cx="7" cy="7" r="7" />
                                      </svg>Motor</a>
                                      </div>
                                  </div>
                                  <div class="group">
                                      <div class=""><a class="flex flex-row items-center px-4 py-2 text-lg whitespace-no-wrap bg-navbar-child-green bg-opacity-90 group-hover:bg-white group-hover:text-navbar-child-green" href="{{ route('office-equipment') }}">
                                      <svg class="mr-2 fill-white group-hover:fill-navbar-child-green" width="14" height="14" viewBox="0 0 14 14"  xmlns="http://www.w3.org/2000/svg">
                                      <circle cx="7" cy="7" r="7" />
                                      </svg>Alat Kantor</a>
                                      </div>
                                  </div>
                                  <div class=""><a class="block px-4 py-2 text-lg font-semibold whitespace-no-wrap bg-navbar-child-green hover:bg-white hover:text-navbar-child-green bg-opacity-90" href="{{ route('expedition') }}">Ekspedisi <br/> &nbsp;</a></div> 
                              </div>
                            </div>
                              <div id="btn-3" class=""><a class="block px-4 py-2 text-lg font-semibold whitespace-no-wrap bg-navbar-child-green hover:bg-white hover:text-navbar-child-green bg-opacity-90" href="{{ route('expedition') }}">Ekspedisi <br/> &nbsp;</a></div> 
                                
                          </div>

                          <div class="flex flex-col dropdown4">
                            <div class="group">
                              <a class="block px-4 py-2 text-lg font-bold whitespace-no-wrap rounded-tr bg-navbar-child-green bg-opacity-90 group-hover:bg-white group-hover:text-navbar-child-green" href="{{route('tele-center')}}">
                                Call Center</a>
                              </div>  
                              <div class="dropdown-menu4 hidden">
                                  
                              </div>
                            <div class=""><a class="block px-4 py-2 text-lg font-semibold whitespace-no-wrap rounded-br bg-navbar-child-green hover:bg-white hover:text-navbar-child-green bg-opacity-90" target="_blank" href="https://tip-o.com/">Tip-O<br/>Belanja Online</a></div>    
                            
                            </div>
                          </div>
                    </div>
                </div>
            </div>
            <div>
              <div class="dropdown">
                <a href="javascript:void(0)" class="flex flex-row items-center py-2 pl-3 pr-4 text-lg border-b border-gray-100 group text-navbar-green hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:p-0 ">
                  <div class="flex flex-col">
                    <div class="flex flex-row items-center">
                      Kinerja
                    
                    </div>
                    <div class="w-1/2 mt-2 border-2 border-white rounded group-hover:border-light-green"></div>
                  </div>
                </a>
                  <ul class="absolute hidden pt-4 text-white dropdown-menu">
                    <div class="relative"><img class="absolute left-[25%] " src="/img/arrow-navbar.png" alt=""><a class="block px-4 py-2 text-lg whitespace-no-wrap border-t-8 rounded-t border-t-white bg-navbar-child-green bg-opacity-90 hover:bg-white hover:text-navbar-child-green" href="{{ route('annual-report') }}">Laporan Tahunan</a></div>
                    <div class=""><a class="block px-4 py-2 text-lg whitespace-no-wrap rounded-b bg-navbar-child-green bg-opacity-90 hover:bg-white hover:text-navbar-child-green" href="{{ route('financial-statement') }}">Laporan Keuangan</a></div>
                  </ul>
              </div>
            </div>
            <div>
              <div class="dropdown">
                <a href="javascript:void(0)" class="flex flex-row items-center py-2 pl-3 pr-4 text-lg border-b border-gray-100 group text-navbar-green hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:p-0 ">
                  <div class="flex flex-col">
                    <div class="flex flex-row items-center">
                      Karir
                    
                    </div>
                    <div class="w-1/2 mt-2 border-2 border-white rounded group-hover:border-light-green"></div>
                  </div>
                </a>
                  <ul class="absolute hidden pt-4 text-white dropdown-menu">
                    <div class="relative"><img class="absolute left-[15%] " src="/img/arrow-navbar.png" alt=""><a class="block px-4 py-2 text-lg whitespace-no-wrap border-t-8 rounded-t border-t-white bg-navbar-child-green bg-opacity-90 hover:bg-white hover:text-navbar-child-green" href="{{ route('job-vacancy') }}">Lowongan</a></div>
                    <div class=""><a class="block px-4 py-2 text-lg whitespace-no-wrap bg-navbar-child-green bg-opacity-90 hover:bg-white hover:text-navbar-child-green" href="{{ route('join-us') }}">Gabung Sekarang</a></div>
                    
                  </ul>
              </div>
            </div>
            <div>
              <div class="dropdown">
                <a href="javascript:void(0)" class="flex flex-row items-center py-2 pl-3 pr-4 text-lg border-b border-gray-100 group text-navbar-green hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:p-0 ">
                  <div class="flex flex-col">
                    <div class="flex flex-row items-center">
                     Kontak
                    
                    </div>
                    <div class="w-1/2 mt-2 border-2 border-white rounded group-hover:border-light-green"></div>
                  </div>
                </a>
                  <ul class="absolute hidden pt-4 text-white dropdown-menu">
                    <div class="relative"><img class="absolute left-[25%] " src="/img/arrow-navbar.png" alt="">
                    <a class="block -ml-24 px-4 py-2 text-lg whitespace-no-wrap border-t-8 rounded-t border-t-white bg-navbar-child-green bg-opacity-90 hover:bg-white hover:text-navbar-child-green" href="{{ route('head-office') }}">Kantor Pusat</a></div>
                    <div class=""><a class="block -ml-24 px-4 py-2 text-lg whitespace-no-wrap bg-navbar-child-green bg-opacity-90 hover:bg-white hover:text-navbar-child-green" href="{{ route('representative-office') }}">Kantor Perwakilan</a></div>
                    <div class=""><a class="block -ml-24 px-4 py-2 text-lg whitespace-no-wrap bg-navbar-child-green bg-opacity-90 hover:bg-white hover:text-navbar-child-green" href="{{ route('insurance-partner') }}">Bengkel Rekanan <br/> Asuransi</a></div>
                    <div class=""><a class="block -ml-24 px-4 py-2 text-lg whitespace-no-wrap bg-navbar-child-green bg-opacity-90 hover:bg-white hover:text-navbar-child-green" href="{{ route('service-partner') }}">Bengkel Rekanan <br/> Service</a></div>
                    <div class=""><a class="block -ml-24 px-4 py-2 text-lg whitespace-no-wrap bg-navbar-child-green bg-opacity-90 hover:bg-white hover:text-navbar-child-green" href="{{ route('whistle-blowing-system') }}">Whistle Blowing System</a></div>
                    <div class=""><a class="block -ml-24 px-4 py-2 text-lg whitespace-no-wrap rounded-b bg-navbar-child-green bg-opacity-90 hover:bg-white hover:text-navbar-child-green" href="{{ route('privacy-policy') }}">Kebijakan Privasi</a></div>
                  </ul>
              </div>
            </div>
          </ul>
        </div>

        {{-- MOBILE MENU navbar --}}
        <div id="sidebarMenu" class="w-4/5 xl:hidden sm:flex " >
          <div class="w-full h-full shadow-md bg-white absolute " id="sidenavSecExample">
            <div class="pt-8 pb-2 px-6">
              
            </div>
            <ul class="relative px-1 text-navbar-green">
              <li class="relative uppercase">
                <a href="{{ route('home') }}" class="flex items-center font-bold text-sm py-4 px-6 h-12 overflow-hidden text-navbar-green text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out"  data-mdb-ripple="true" data-mdb-ripple-color="primary">
                  <span>Beranda</span>
                </a>
              </li>
            </ul>
            <ul class="relative px-1 text-navbar-green">
              <li class="relative dropdown uppercase" id="menu-1">
                <a class="flex items-center text-sm font-bold py-4 px-6 h-12 overflow-hidden text-navbar-green text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out cursor-pointer" data-mdb-ripple="true" data-mdb-ripple-color="primary" data-bs-toggle="collapse" data-bs-target="#collapseSidenavSecEx2" aria-expanded="false" aria-controls="collapseSidenavSecEx2">
                  <span>Tentang Kami</span>
                  <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-3 h-3 ml-auto" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                  </svg>
                </a>
                
                <ul class="relative accordion-collapse collapse dropdown-menu hidden" id="sub-menu-1" aria-labelledby="sidenavSecEx2" data-bs-parent="#sidenavSecExample">
                  <li class="relative">
                    <a href="{{ route('profile') }}" class="flex items-center font-bold text-xs py-4 pl-12 pr-6 h-6 overflow-hidden text-navbar-green text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="primary">Profile</a>
                  </li>
                  <li class="relative">
                    <a href="{{ route('appreciation') }}" class="flex items-center font-bold text-xs py-4 pl-12 pr-6 h-6 overflow-hidden text-navbar-green text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="primary">Penghargaan</a>
                  </li>
                  <li class="relative">
                    <a href="{{ route('certification') }}" class="flex items-center font-bold text-xs py-4 pl-12 pr-6 h-6 overflow-hidden text-navbar-green text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="primary">Sertifikasi</a>
                  </li>
                  <li class="relative">
                    <a href="{{ route('article.home') }}" class="flex items-center font-bold text-xs py-4 pl-12 pr-6 h-6 overflow-hidden text-navbar-green text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="primary">Berita</a>
                  </li>
                  <li class="relative">
                    <a href="{{ route('gallery') }}" class="flex items-center font-bold text-xs py-4 pl-12 pr-6 h-6 overflow-hidden text-navbar-green text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="primary">Galeri Kegiatan</a>
                  </li>
                </ul>
              </li>
            </ul>
            <hr class="my-2">
            <ul class="relative px-1 text-navbar-green">  
              <li class="relative dropdown uppercase" id="menu-2">
                <a class="flex items-center font-bold text-sm py-4 px-6 h-12 overflow-hidden text-navbar-green text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out cursor-pointer" data-mdb-ripple="true" data-mdb-ripple-color="primary" data-bs-toggle="collapse" data-bs-target="#collapseSidenavSecEx3" aria-expanded="false" aria-controls="collapseSidenavSecEx3">
                  <span>Produk & Layanan</span>
                  <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-3 h-3 ml-auto" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                  </svg>
                </a>
                <ul class="relative accordion-collapse collapse dropdown-menu hidden" id="sub-menu-2" aria-labelledby="sidenavSecEx3" data-bs-parent="#sidenavSecExample">
                  <li class="relative">
                    <a href="javascript:void(0)" class="flex items-center font-bold text-xs py-4 pl-12 pr-6 h-6 overflow-hidden text-navbar-green text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="primary">Outsourcing</a>
                  </li>
                  <li class="relative">
                    <a href="{{ route('security') }}" class="flex items-center font-bold text-xs py-4 pl-12 pr-6 h-6 overflow-hidden text-navbar-green text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="primary">
                      <svg class="mr-2 fill-navbar-green group-hover:fill-navbar-child-green" width="7" height="7" viewBox="0 0 14 14"  xmlns="http://www.w3.org/2000/svg">
                          <circle cx="7" cy="7" r="7" />
                      </svg>Security
                    </a>
                  </li>
                  <li class="relative">
                    <a href="{{ route('cleaning-service') }}" class="flex items-center font-bold text-xs py-4 pl-12 pr-6 h-6 overflow-hidden text-navbar-green text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="primary">
                      <svg class="mr-2 fill-navbar-green group-hover:fill-navbar-child-green" width="7" height="7" viewBox="0 0 14 14"  xmlns="http://www.w3.org/2000/svg">
                          <circle cx="7" cy="7" r="7" />
                      </svg>Cleaning Service
                    </a>
                  </li>
                  <li class="relative">
                    <a href="{{ route('driver') }}" class="flex items-center font-bold text-xs py-4 pl-12 pr-6 h-6 overflow-hidden text-navbar-green text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="primary">
                      <svg class="mr-2 fill-navbar-green group-hover:fill-navbar-child-green" width="7" height="7" viewBox="0 0 14 14"  xmlns="http://www.w3.org/2000/svg">
                            <circle cx="7" cy="7" r="7" />
                      </svg>Driver
                    </a>
                  </li>
                  <li class="relative">
                    <a href="{{route('information-page')}}" target="_blank" class="flex items-center font-bold text-xs py-4 pl-12 pr-6 h-6 overflow-hidden text-navbar-green text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="primary">Share_pa <br> sewa mobil harian</a>
                  </li>
                  <li class="relative">
                    <a href="javascript:void(0)" class="flex items-center font-bold text-xs py-4 pl-12 pr-6 h-6 overflow-hidden text-navbar-green text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="primary">rental</a>
                  </li>
                  <li class="relative">
                    <a href="{{ route('car') }}" class="flex items-center font-bold text-xs py-4 pl-12 pr-6 h-6 overflow-hidden text-navbar-green text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="primary">
                      <svg class="mr-2 fill-navbar-green group-hover:fill-navbar-child-green" width="7" height="7" viewBox="0 0 14 14"  xmlns="http://www.w3.org/2000/svg">
                          <circle cx="7" cy="7" r="7" />
                      </svg>mobil
                    </a>
                  </li>
                  <li class="relative">
                    <a href="{{ route('motorcycle') }}" class="flex items-center font-bold text-xs py-4 pl-12 pr-6 h-6 overflow-hidden text-navbar-green text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="primary">
                      <svg class="mr-2 fill-navbar-green group-hover:fill-navbar-child-green" width="7" height="7" viewBox="0 0 14 14"  xmlns="http://www.w3.org/2000/svg">
                          <circle cx="7" cy="7" r="7" />
                      </svg>motor
                    </a>
                  </li>
                  <li class="relative">
                    <a href="{{ route('office-equipment') }}" class="flex items-center font-bold text-xs py-4 pl-12 pr-6 h-6 overflow-hidden text-navbar-green text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="primary">
                      <svg class="mr-2 fill-navbar-green group-hover:fill-navbar-child-green" width="7" height="7" viewBox="0 0 14 14"  xmlns="http://www.w3.org/2000/svg">
                            <circle cx="7" cy="7" r="7" />
                      </svg>alat kantor
                    </a>
                  </li>
                  <li class="relative">
                    <a href="{{ route('expedition') }}" class="flex items-center font-bold text-xs py-4 pl-12 pr-6 h-6 overflow-hidden text-navbar-green text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="primary">ekspedisi</a>
                  </li>
                  <li class="relative">
                    <a href="{{ route('tele-center') }}" class="flex items-center font-bold text-xs py-4 pl-12 pr-6 h-6 overflow-hidden text-navbar-green text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="primary">call center</a>
                  </li>
                  <li class="relative">
                    <a href="https://tip-o.com/" target="_blank" class="flex items-center font-bold text-xs py-4 pl-12 pr-6 h-6 overflow-hidden text-navbar-green text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="primary">tip-o <br> belanja online</a>
                  </li>
                </ul>
              </li>
            </ul> 
            <hr class="my-2">
            <ul class="relative px-1 text-navbar-green">
              <li class="relative dropdown uppercase" id="menu-3">
                <a class="flex items-center font-bold text-sm py-4 px-6 h-12 overflow-hidden text-navbar-green text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out cursor-pointer" data-mdb-ripple="true" data-mdb-ripple-color="primary" data-bs-toggle="collapse" data-bs-target="#collapseSidenavXxEx2" aria-expanded="false" aria-controls="collapseSidenavXxEx2"> 
                  <span>Kinerja</span>
                  <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-3 h-3 ml-auto" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                  </svg>
                </a>
                <ul class="relative accordion-collapse collapse dropdown-menu hidden" id="sub-menu-3" aria-labelledby="sidenavSecEx3" data-bs-parent="#sidenavSecExample">
                  <li class="relative">
                    <a href="{{ route('annual-report') }}" class="flex items-center font-bold text-xs py-4 pl-12 pr-6 h-6 overflow-hidden text-navbar-green text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="primary">laporan tahunan</a>
                  </li>
                  <li class="relative">
                    <a href="{{ route('financial-statement') }}" class="flex items-center font-bold text-xs py-4 pl-12 pr-6 h-6 overflow-hidden text-navbar-green text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="primary">laporan keuangan</a>
                  </li>
                  
                </ul>
              </li>
            </ul>
            <hr class="my-2">
            <ul class="relative px-1 text-navbar-green">
              <li class="relative dropdown uppercase" id="menu-4">
                <a class="flex items-center font-bold text-sm py-4 px-6 h-12 overflow-hidden text-navbar-green text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out cursor-pointer" data-mdb-ripple="true" data-mdb-ripple-color="primary" data-bs-toggle="collapse" data-bs-target="#collapseSidenavXxEx2" aria-expanded="false" aria-controls="collapseSidenavXxEx2"> 
                  <span>Karir</span>
                  <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-3 h-3 ml-auto" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                  </svg>
                </a>
                <ul class="relative accordion-collapse collapse dropdown-menu hidden" id="sub-menu-4" aria-labelledby="sidenavSecEx3" data-bs-parent="#sidenavSecExample">
                  <li class="relative">
                    <a href="{{ route('job-vacancy') }}" class="flex items-center font-bold text-xs py-4 pl-12 pr-6 h-6 overflow-hidden text-navbar-green text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="primary">lowongan</a>
                  </li>
                  <li class="relative">
                    <a href="{{ route('join-us') }}" class="flex items-center font-bold text-xs py-4 pl-12 pr-6 h-6 overflow-hidden text-navbar-green text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="primary">gabung sekarang</a>
                  </li>
                  
                </ul>
              </li>
            </ul>
            <hr class="my-2">
            <ul class="relative px-1 ">
              <li class="relative dropdown uppercase " id="menu-5">
                <a class="flex items-center font-bold text-sm py-4 px-6 h-12 overflow-hidden text-navbar-green text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out cursor-pointer" data-mdb-ripple="true" data-mdb-ripple-color="primary" data-bs-toggle="collapse" data-bs-target="#collapseSidenavXxEx2" aria-expanded="false" aria-controls="collapseSidenavXxEx2"> 
                  <span>Kontak</span>
                  <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-3 h-3 ml-auto" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                  </svg>
                </a>
                <ul class="relative accordion-collapse collapse dropdown-menu hidden" id="sub-menu-5" aria-labelledby="sidenavSecEx3" data-bs-parent="#sidenavSecExample">
                  <li class="relative">
                    <a href="{{ route('head-office') }}" class="flex items-center font-bold text-xs py-4 pl-12 pr-6 h-6 overflow-hidden text-navbar-green text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="primary">kantor pusat</a>
                  </li>
                  <li class="relative">
                    <a href="{{ route('representative-office') }}" class="flex items-center font-bold text-xs py-4 pl-12 pr-6 h-6 overflow-hidden text-navbar-green text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="primary">kantor perwakilan</a>
                  </li>
                  <li class="relative">
                    <a href="{{ route('insurance-partner') }}" class="flex items-center font-bold text-xs py-4 pl-12 pr-6 h-10 overflow-hidden text-navbar-green text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="primary">bengkel rekanan <br> asuransi</a>
                  </li>
                  <li class="relative">
                    <a href="{{ route('service-partner') }}" class="flex items-center font-bold text-xs py-4 pl-12 pr-6 h-10 overflow-hidden text-navbar-green text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="primary">bengkel rekanan <br> service</a>
                  </li>
                  <li class="relative">
                    <a href="{{ route('whistle-blowing-system') }}" class="flex items-center font-bold text-xs py-4 pl-12 pr-6 h-6 overflow-hidden text-navbar-green text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="primary">whistle blowing system</a>
                  </li>
                  <li class="relative">
                    <a href="{{ route('privacy-policy') }}" class="flex items-center font-bold text-xs py-4 pl-12 pr-6 h-6 overflow-hidden text-navbar-green text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="primary">kebijakan privasi</a>
                  </li>
                  
                </ul>
              </li>
            </ul>
            <hr class="my-2">
            <div class="text-center bottom-0 absolute w-full">
              <hr class="m-0">
              <p class="py-2 text-sm font-bold text-navbar-green">optimajasa.co.id</p>
            </div>
          </div>
        </div>
        
      </div>
      
    </nav>
</div>

<style>
.font-lato {
        font-family: 'Lato', sans-serif;
    }
 @import url('https://fonts.googleapis.com/css?family=Varela+Round');

.header {
    display: block;
    margin: 0 auto;
    width: 100%;
    max-width: 100%;
    box-shadow: none;
    position: fixed;
    height: 60px!important;
    overflow: hidden;
    z-index: 10;
}
.main {
    margin: 0 auto;
    display: block;
    height: 100%;
    margin-top: 60px;
}
.mainInner{
    display: table;
    height: 100%;
    width: 100%;
    text-align: center;
}
.mainInner div{
    display:table-cell;
    vertical-align: middle;
    font-size: 3em;
    font-weight: bold;
    letter-spacing: 1.25px;
}
#sidebarMenu {
    height: 100%;
    position: fixed;
    right: 0;
    width: 250px;
    top: 1;
    transform: translateX(250px);
    transition: transform 250ms ease-in-out;
    /* background: linear-gradient(180deg, #FC466B 0%, #3F5EFB 100%); */
    background: #fff;
    --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
    --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}
.sidebarMenuInner{
    margin:0;
    padding:0;
    border-top: 1px solid rgba(255, 255, 255, 0.10);
}
.sidebarMenuInner li{
    list-style: none;
    color: #fff;
    text-transform: uppercase;
    font-weight: bold;
    padding: 2px;
    cursor: pointer;
    border-bottom: 1px solid rgba(255, 255, 255, 0.10);
}
.sidebarMenuInner li span{
    display: block;
    font-size: 14px;
    color: rgba(255, 255, 255, 0.50);
}
.sidebarMenuInner li a{
    
    text-transform: uppercase;
    font-weight: bold;
    cursor: pointer;
    text-decoration: none;
}
input[type="checkbox"]:checked ~ #sidebarMenu {
    transform: translateX(0);
}

input[type=checkbox] {
    transition: all 0.3s;
    box-sizing: border-box;
    display: none;
}
.sidebarIconToggle {
    transition: all 0.3s;
    box-sizing: border-box;
    cursor: pointer;
    position: absolute;
    z-index: 99;
    height: 100%;
    width: 100%;
    top: 22px;
    right: 15px;
    height: 22px;
    width: 22px;
}
.spinner {
    transition: all 0.3s;
    box-sizing: border-box;
    position: absolute;
    height: 3px;
    width: 100%;
    background-color: #333;
}
.horizontal {
    transition: all 0.3s;
    box-sizing: border-box;
    position: relative;
    float: left;
    margin-top: 3px;
}
.diagonal.part-1 {
    position: relative;
    transition: all 0.3s;
    box-sizing: border-box;
    float: left;
}
.diagonal.part-2 {
    transition: all 0.3s;
    box-sizing: border-box;
    position: relative;
    float: left;
    margin-top: 3px;
}
input[type=checkbox]:checked ~ .sidebarIconToggle > .horizontal {
    transition: all 0.3s;
    box-sizing: border-box;
    opacity: 0;
}
input[type=checkbox]:checked ~ .sidebarIconToggle > .diagonal.part-1 {
    transition: all 0.3s;
    box-sizing: border-box;
    transform: rotate(135deg);
    margin-top: 8px;
}
input[type=checkbox]:checked ~ .sidebarIconToggle > .diagonal.part-2 {
    transition: all 0.3s;
    box-sizing: border-box;
    transform: rotate(-135deg);
    margin-top: -9px;
}
</style>
<script>
  $(document).ready(function(){
    $("#parent-btn2").mouseover(function(){
      $("#btn-2").hide()
    });
    $("#parent-btn2").mouseout(function(){
      $("#btn-2").show()
    });
    $("#parent-btn3").mouseover(function(){
      $("#btn-3").hide()
    });
    $("#parent-btn3").mouseout(function(){
      $("#btn-3").show()
    });
  });

  $("#menu-1").click(function(){
    $("#sub-menu-1").show()
    $("#sub-menu-2").hide()
    $("#sub-menu-3").hide()
    $("#sub-menu-4").hide()
    $("#sub-menu-5").hide()
  });
  $("#menu-2").click(function(){
    $("#sub-menu-1").hide()
    $("#sub-menu-2").show()
    $("#sub-menu-3").hide()
    $("#sub-menu-4").hide()
    $("#sub-menu-5").hide()
  });
  $("#menu-3").click(function(){
    $("#sub-menu-1").hide()
    $("#sub-menu-2").hide()
    $("#sub-menu-3").show()
    $("#sub-menu-4").hide()
    $("#sub-menu-5").hide()
  });
  $("#menu-4").click(function(){
    $("#sub-menu-1").hide()
    $("#sub-menu-2").hide()
    $("#sub-menu-3").hide()
    $("#sub-menu-4").show()
    $("#sub-menu-5").hide()
  });
  $("#menu-5").click(function(){
    $("#sub-menu-1").hide()
    $("#sub-menu-2").hide()
    $("#sub-menu-3").hide()
    $("#sub-menu-4").hide()
    $("#sub-menu-5").show()
  });
</script>

