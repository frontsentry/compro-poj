@extends('layouts.main')

@section('content')
<div class="pt-24 xl:w-[1206px] xl:mx-auto sm:w-full sm:mx-0 xl:px-0 sm:px-2 ">
    <div class="mb-20">
        <div class="pt-4 font-family font-400 w-[200px]">
            <span class="text-4xl text-title-green">BERITA</span>
            <span class="text-4xl ">TERBARU</span>
        </div>


        <div class="flex flex-row w-full pt-4 text-lg font-bold text-left text-footer-black">
            <div class="flex flex-wrap xl:w-2/3 sm:w-full">
                @foreach ($articles as $article)
                <div class="mb-8">
                    <div class="flex flex-row mb-2 xl:w-[710px] sm:w-full">
                        <div class="flex flex-col group">
                            <div class="flex flex-row">
                                <div class="w-[40%] xl:px-0 sm:px-2 xl:mr-6 sm:mr-0">
                                    <img class="xl:h-[180px] sm:h-[100px] xl:w-[300px] sm:w-[225px] rounded-md shadow-md object-cover"
                                        src="{{ Storage::url($article->image_url)}}" alt="test">
                                </div>
                                <div class="w-[60%]">
                                    <a class="" href="/news/{{$article->slug}}">
                                        <h1 class="font-bold xl:text-xl sm:text-sm group-hover:text-navbar-child-green">
                                            {{ $article->title }}</h1>
                                        <p
                                            class="font-400 xl:my-3 sm:my-0 xl:text-[16px] sm:text-[10px] text-navbar-child-green group-hover:text-footer-black">
                                            {{ date('j F Y', strtotime($article->created_at)) }}</p>
                                        <span
                                            class="xl:block sm:hidden xl:text-[16px] sm:text-[12px] font-400 leading-[19px]">{!!
                                            strip_tags(Str::limit ($article->content,160, '...'))!!}</span>
                                    </a>
                                </div>
                            </div>

                            <div class="px-2 xl:hidden sm:flex">
                                <span
                                    class="text-footer-black xl:hidden sm:block xl:text-[16px] sm:text-[12px] font-400 leading-[19px] mt-2">{!!
                                    strip_tags(Str::limit ($article->content,100, '...'))!!}</span>
                            </div>
                        </div>

                    </div>
                    <div>
                        <hr class="mt-8">
                    </div>
                </div>
                @endforeach
                {{ $articles->links() }}

            </div>


            <div
                class="w-[343px] xl:flex flex-col sm:hidden h-[250px] px-4 pt-2 pb-4 ml-6 rounded-md shadow-xl bg-article-about">
                <span class="font-[800] font-lato text-xl text-navbar-child-green">Tentang <span
                        class="text-footer-black">Berita</span> </span>
                <div class="pt-2 font-lato font-400 text-lg text-left leading-[21px]">
                    Selamat datang di blog optimajasa.co.id, blog resmi PT. Pesonna Optima Jasa. Sebagai perusahanaan
                    jasa, kita semua kita semua memahami pentingnya kualitas layanan dan tingkat hasil pekerjaan.
                    Didalam blog ini kami coba memberikan beberapa article untuk membantu anda mendapatkan penyedia jasa
                    terbaik.
                </div>
            </div>

        </div>
    </div>
</div>

@endsection

<style>
    .font-family {
        font-family: 'Bebas Neue', cursive;
    }
</style>