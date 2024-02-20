@extends('layouts.main')

@section('content')
<div style="background-image: url('/img/report/report-bg.png');" class="bg-center bg-no-repeat bg-contain">
    <div class="pt-20">
        <img class="w-full" src="/img/report/finance-banner.png" alt="">
    </div>
    <div  class="xl:w-[1206px] xl:mx-auto sm:w-full sm:mx-0 xl:px-0 sm:px-2 xl:pt-16 sm:pt-6 xl:mb-24 sm:mb-4">
        <div class="grid mx-auto xl:grid-cols-3 sm:grid-cols-2 xl:gap-12 sm:gap-4">
            @foreach ($files as $file)
            <div class="xl:w-[375px]">
                <div class="flex flex-col" >
                    <a href="{{ Storage::disk('s3')->url($file->attachment) }}" class="relative group" target="_blank">
                        <div class="absolute xl:w-[280px] sm:w-[190px] grid mx-auto inset-0 z-10 items-center justify-center my-auto duration-300 opacity-0 xl:h-24 sm:h-20 bg-[#018000] group-hover:opacity-90 bg-opacity-90">
                            <div class="flex flex-row text-white font-lato font-[800] text-xl items-center justify-self-center w-full h-full">
                                <svg width="29" height="20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M28.956 13.9a4.956 4.956 0 0 0-.934-2.376 5.684 5.684 0 0 0-2.255-1.87c-.198-.09-.4-.17-.611-.243-.207-.073-.422-.126-.637-.186.68-1.036.796-2.137.349-3.283-.276-.704-.784-1.247-1.425-1.68a3.593 3.593 0 0 0-1.136-.506 4.208 4.208 0 0 0-1.253-.121c-.422.02-.83.097-1.222.247-.396.15-.749.36-1.076.627-.047-.105-.095-.202-.142-.303-.788-1.591-2.049-2.749-3.723-3.518a7.587 7.587 0 0 0-2.23-.623 8.682 8.682 0 0 0-1.945-.02c-1.14.109-2.2.437-3.163 1.015-1.356.818-2.398 1.903-3.06 3.291a6.585 6.585 0 0 0-.603 2.312c-.03.38-.034.76.004 1.141.005.053-.008.085-.064.11-1.55.7-2.643 1.817-3.319 3.294a5.397 5.397 0 0 0-.46 1.668 6.194 6.194 0 0 0 .258 2.704c.293.878.788 1.643 1.446 2.32a6.9 6.9 0 0 0 2.114 1.5 6.363 6.363 0 0 0 2 .543c.34.033.685.053 1.03.053 5.448.004 10.897.004 16.342 0 1.545 0 2.875-.518 3.985-1.53.715-.652 1.24-1.413 1.528-2.312.133-.416.21-.845.232-1.279l.013-.109v-.445c-.013-.138-.025-.28-.043-.421Zm-9.804-2.17-1.433 1.348c-1.261 1.186-2.522 2.368-3.78 3.554-.154.146-.322.215-.533.17a.516.516 0 0 1-.245-.133c-.921-.87-1.847-1.737-2.768-2.603-.83-.781-1.661-1.563-2.496-2.344a.47.47 0 0 1-.163-.425c.021-.178.193-.348.387-.38.052-.008.107-.012.16-.012h3.313V5.942c0-.235.138-.417.362-.474a.84.84 0 0 1 .176-.016h2.798c.34 0 .538.19.538.51v4.943H18.795c.142 0 .275.02.383.113.21.186.202.494-.026.712Z" fill="#fff"/></svg>
                                <span class="mx-2 text-left ">Download</span>
                            </div>
                        </div>
                        
                        <img class="mx-auto w-[237px] h-[361px] border-2 rounded-xl border-title-green" src="{{ Storage::disk('s3')->url($file->image_url) }}" alt="cover">
                    </a>
                    <h1 class="font-family font-400 text-footer-black text-center xl:text-[40px] sm:text-xl xl:mt-6 sm:mt-2 xl:mb-16 sm:mb-2">{{ $file->name }}</h1>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
</div>
@endsection

<style>
    .font-family {
        font-family: 'Bebas Neue', cursive;
    }
</style>