@extends('layouts.main')

@section('content')
<div  class="">
    <div class="pt-20">
        <img class="w-full" src="/img/contact/service-partner-banner.png" alt="">
    </div>
    <div  class="xl:w-[1206px] xl:mx-auto sm:w-full sm:mx-0 xl:px-0 sm:px-2 xl:pt-10 sm:pt-6 xl:mb-24 sm:mb-4 ">
        <div class="flex xl:flex-row sm:flex-col xl:gap-[305px] sm:gap-0">
            <div class="xl:mb-0 sm:mb-4">
                <h1 class="text-title-green font-family xl:text-4xl sm:text-3xl ">daftar bengkel <span class="text-footer-black">rekanan service</span></h1>
                <img src="/img/line-green.png" alt="">
                
            </div>
            <div class="xl:w-[442px] sm:w-auto h-[28px] bg-side-gray flex flex-row items-center rounded-xl font-lato font-400 ">
                <div class="p-2 ">
                    <svg  width="14" height="15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 6.054a5.063 5.063 0 0 0 5.07 5.058 5.06 5.06 0 0 0 2.658-.751l3.315 3.307a1.152 1.152 0 0 0 1.624 0 1.145 1.145 0 0 0 0-1.621l-3.305-3.3c.492-.78.778-1.702.778-2.693A5.065 5.065 0 0 0 5.07.997 5.065 5.065 0 0 0 0 6.054Zm8.68 0a3.607 3.607 0 0 1-3.61 3.602 3.611 3.611 0 0 1-3.613-3.602A3.61 3.61 0 0 1 5.07 2.453a3.605 3.605 0 0 1 3.61 3.601Z" fill="#999"/></svg>
                </div>
                
                <input id="searchbar" class="border-gray-600 w-[442px] h-[28px] rounded-xl bg-side-gray focus:outline-none" placeholder="Cari" type="text">
                
            </div>
            
        </div>
        
        <div class="mt-6">
           <div class="shadow-xl rounded-xl">
            <div class="flex flex-row w-full bg-side-gray text-footer-black font-lato xl:p-4 sm:p-2 rounded-tl-xl rounded-tr-xl">
                <div class="w-[7%]">
                    <h1 class="font-bold text-center">#</h1>
                </div>
                <div class="w-[32%]">
                    <h1 class="font-bold">Nama Bengkel</h1>
                </div>
                <div class="w-[36%]">
                    <h1 class="font-bold">Alamat</h1>
                </div>
                <div class="w-[25%]">
                    <h1 class="font-bold">No. Telpon</h1>
                </div>
            </div>  
            <div id="partner-table-row">
                @foreach ($partners as $partner)
                <div class="flex flex-row w-full border-b-2 text-footer-black font-lato xl:p-4 sm:p-2 border-b-gray-300 xl:text-lg sm:text-xs">
                    <div class="w-[7%]">
                        <h1 class="text-center">{{ $loop->iteration }} </h1>
                    </div>
                    <div class="w-[32%] xl:pr-14 sm:pr-4">
                        <h1 class="uppercase">{{ $partner->name }}</h1>
                    </div>
                    <div class="w-[36%] xl:pr-14 sm:pr-4">
                        <h1 class="">{{ $partner->address }}</h1>
                    </div>
                    <div class="w-[25%] xl:pr-14 sm:pr-4">
                        <h1 class="">{{ $partner->phone }}</h1>
                    </div>
                </div>
                @endforeach
            </div>
           </div>
        </div>
    </div>
    
</div>
@endsection

@push('component-scripts')
<script>
$(document).ready(function(){
    $('#searchbar').keyup(delay(function(e) {
        let query = $(this).val();
        $('#partner-table-row').empty();
        renderTable(query) 
    }, 500))
});

function renderTable(query) {
    let baseURL = '{{ env('APP_URL') }}';    
    let url = new URL(baseURL + '/api/partners');
    url.searchParams.append('type', 'service');
    url.searchParams.append('search', query);
    
    $.ajax({
        url: url,
        type: 'GET',
        success(partners) {  
            let count = 1;
            let rows = '';
            partners.forEach(partner => {
                row = `<div class="flex flex-row w-full border-b-2 text-footer-black font-lato xl:p-4 sm:p-2 border-b-gray-300 xl:text-lg sm:text-xs">
                        <div class="w-[7%]">
                            <h1 class="text-center">${count}</h1>
                        </div>
                        <div class="w-[32%] xl:pr-14 sm:pr-4">
                            <h1 class="uppercase">${partner.name}</h1>
                        </div>
                        <div class="w-[36%] xl:pr-14 sm:pr-4">
                            <h1 class="">${partner.address}</h1>
                        </div>
                        <div class="w-[25%] xl:pr-14 sm:pr-4">
                            <h1 class="">${partner.phone}</h1>
                        </div>
                       </div>`
                rows = rows + row;
                count++
            })

            if (rows === '') {
                rows = `<div class="flex flex-row w-full border-b-2 text-footer-black font-lato xl:p-4 sm:p-2 border-b-gray-300 xl:text-lg sm:text-xs">
                            <div class="w-full">
                                <h1 class="text-center">Data tidak ditemukan...</h1>
                            </div>
                       </div>`;
            } else {
                $('#partner-table-row').html(rows);
            }
        }
    });
}

function delay(callback, ms) {
  var timer = 0;
  return function() {
    var context = this, args = arguments;
    clearTimeout(timer);
    timer = setTimeout(function () {
      callback.apply(context, args);
    }, ms || 0);
  };
}
</script>
    
@endpush

<style>
    .font-family {
        font-family: 'Bebas Neue', cursive;
    }
</style>