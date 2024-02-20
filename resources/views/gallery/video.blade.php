@extends('layouts.main')

@section('content')

<div class="w-full pt-20">
    <img class="w-full" src="/img/gallery/gallery-banner.png" alt="">
</div>
<div class="flex mt-12 xl:w-[1206px] xl:mx-auto sm:w-full sm:mx-0 xl:px-0 sm:px-2 flex-col w-full">
    <div class="w-auto mx-auto font-family text-2xl font-400">
        <a href="/gallery" class="text-footer-black hover:text-title-green text-center border-title-green border-r-2 pr-8">FOTO</a>
        <a href="/gallery-vid" class="text-center bg-title-green px-4 rounded text-white ml-2">VIDEO</a>
    </div>
    <div class="mt-6 border-t-2  border-title-green">
        <div class="flex flex-col w-full text-center text-footer-black font-400 font-lato">
            {{-- <div class="flex items-center justify-center pt-4 pb-2 mx-auto gap-x-2 xl:gap-y-0 sm:gap-y-2 xl:grid-cols-7 sm:grid-cols-2 xl:text-xl sm:text-sm xl:flex-nowrap sm:flex-wrap">
                
                <div id="" >
                    <a id="linkTags-All" href="" class="px-2 text-white rounded shadow-lg bg-title-green">ALL VIDEO</a>
                </div>
                
            </div> --}}
           
        </div>
    </div>
    <div id="showVideoComponent" class="grid py-4 mx-auto mt-12 xl:gap-12 sm:gap-6 xl:grid-cols-3 sm:grid-cols-2">
        <div>
            <video class="mx-auto rounded-xl w-full h-full" controls>
                <source src="https://optimajasa-assets.s3.ap-southeast-1.amazonaws.com/POJ-compro-video.mp4" type="video/mp4">
            </video>
        </div>  
    </div> 
    

       
</div>
<style>
 
    .font-family {
        font-family: 'Bebas Neue', cursive;
    }
</style>

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script src="js/lightbox.min.js"></script>
<script>


const prefixLinkTags = 'linkTags-'
$('body').on('click', `a[id^=${prefixLinkTags}]`, function(){
    let name = $(this).text()
    renderGalleries(name)

    let id = $(this).attr('id');
    $(`a[id^=${prefixLinkTags}]`).removeClass().addClass("px-2 hover:bg-title-green hover:rounded hover:text-white hover:shadow-lg uppercase");
    $('#'+id).removeClass("px-2 bg-title-green rounded text-white shadow-lg uppercase").addClass("px-2 bg-title-green rounded text-white shadow-lg uppercase");
})
        
function renderGalleries(tags){
    let url = '/api/gallery-vid'
    if (tags !== '' && tags !== undefined) {
        url = url+'?tags='+tags
    }

    $('#showVideoComponent').empty()

    $.ajax({
        url: url,
        method: 'get',
        }).then((datas)=>{
            buildGalleryComponent(datas);     
        });        
}

function buildGalleryComponent(datas) {
    var path = 'https://poj-assets.s3-ap-southeast-1.amazonaws.com'
    datas.forEach(data => {
        html = `<div class="relative cursor-pointer group">
                    <a href="javascript:void(0)" class="relative">
                        
                        
                        <div class="content-center">
                            <video class="mx-auto rounded-xl w-full h-full" controls>
                                <source src="`+path+`/`+data.attachment+`" type="video/mp4">
                            </video>
                            
                        </div>
                    </a>
                </div>`
        
        $("#showVideoComponent").append(html);
    }); 
}

function buildTagsComponent(tags){
    tags.forEach(data => {
       html = `<a id="linkTags-`+data.id+`" href="javascript:void(0)" class="px-2 hover:bg-title-green hover:rounded hover:text-white hover:shadow-lg uppercase">`+data.name.en+`</a>`
        $("#showTagsComponent").append(html);
    });
}

        

function renderTags(){
    $.ajax({
        url: '/api/gallery/tags',
        method: 'get',
        async: false
        }).then((tags)=>{
            buildTagsComponent(tags);
    });
}
    
$(document).ready(function(){
    renderGalleries()
    renderTags()   
});   
    
</script>
    
@endsection

