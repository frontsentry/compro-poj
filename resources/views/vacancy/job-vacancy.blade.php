@extends('layouts.main')

@section('content')

<div style="background-image: url('/img/report/report-bg.png');" class="bg-center bg-repeat-y bg-contain">
    <div class="pt-20">
        <img class="w-full" src="/img/vacancy/job-vacancy-banner.png" alt="">
    </div>
    <div class="xl:w-[1206px] xl:mx-auto sm:w-full sm:mx-0 xl:px-0 sm:px-2 xl:pt-16 sm:pt-6 xl:mb-24 sm:mb-4">
        @foreach ($vacancies as $vacancy)
        <div class="mt-4 xl:mb-12 sm:mb-10">
            <div class="">
                <h1 class="text-title-green font-family xl:text-4xl sm:text-2xl">{{ $vacancy->name }}</h1>
                <img src="/img/line-green.png" alt="">
            </div>
            <div class="mt-4">
                <p class="text-footer-black font-lato font-[800] xl:text-xl sm:text-lg xl:mb-4">Kriteria dan Ketentuan:</p> 
                <div class="flex flex-row mt-2 ">
                    <p class="font-lato font-400 xl:text-xl sm:text-lg ">
                        <div class="py-1 pr-4">
                            {!! $vacancy->description !!}
                        </div>
                    </p>
                </div>                
            </div>
            <div class="xl:mt-5 sm:mt-6">
                <a href="{{ $vacancy->link }}"
                    class="text-white rounded-lg xl:py-3 sm:py-2 xl:px-6 sm:px-2 xl:mr-2 sm:mr-0 xl:text-xl sm:text-lg bg-title-green hover:bg-light-green hover:text-white font-lato font-400">Apply Now</a>
            </div>
            
        </div>
        @endforeach
        

    </div>

</div>
@endsection

<style>
    .font-family {
        font-family: 'Bebas Neue', cursive;
    }

</style>
