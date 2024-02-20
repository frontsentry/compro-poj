@extends('layouts.main')

@section('content')

<div class="w-full pt-20">
    <img class="w-full" src="/img/gallery/gallery-banner.png" alt="">
</div>
<div class="flex mt-12 xl:w-[1206px] xl:mx-auto sm:w-full sm:mx-0 xl:px-0 sm:px-2 flex-col w-full">
    <div class="w-auto mx-auto text-2xl font-family font-400">
        <button id="btn-image" class="px-4 text-center text-white rounded bg-title-green">FOTO</button>
        <button id="btn-video" class="px-4 text-center hover:text-title-green border-title-green">VIDEO</button>
    </div>
   
        <div id="border-component" class="mt-6 border-t-2 border-b-2 border-title-green"> 
            <div class="flex flex-col w-full text-center text-footer-black font-400 font-lato">
                <div
                    class="flex items-center justify-center pt-4 pb-4 mx-auto gap-x-2 xl:gap-y-0 sm:gap-y-2 xl:grid-cols-7 sm:grid-cols-2 xl:text-xl sm:text-sm xl:flex-nowrap sm:flex-wrap">
    
                    <div id="tags-component">
                        <button id="tag-all" href="" class="px-2 text-white rounded shadow-lg bg-title-green">ALL</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="border-b-2 border-title-green">

        </div> --}}
        
   
    
    <div id="galleries-component" class="grid py-4 mx-auto mt-12 xl:gap-12 sm:gap-6 xl:grid-cols-3 sm:grid-cols-2">
    </div>
</div>


<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script src="js/lightbox.min.js"></script>
<script>
    const baseURL = "{{ env('APP_URL') }}";
    const awsURL = "{{ env('AWS_URL') }}";
    const activeButtonClass = "px-4 text-center text-white rounded bg-title-green"
    const inactiveButtonClass = "px-4 text-center hover:text-title-green border-title-green"
    const prefixTag = 'tag-'

    let typeState = '';
    
    $('#btn-image').click(function () {
        renderGalleries('image');
        $(this).removeClass().addClass(activeButtonClass);
        $('#btn-video').removeClass().addClass(inactiveButtonClass);
    })

    $('#btn-video').click(function () {
        renderGalleries('video');
        $(this).removeClass().addClass(activeButtonClass);
        $('#btn-image').removeClass().addClass(inactiveButtonClass);
    })

    $('body').on('click', `button[id^=${prefixTag}]`, function () {
        let name = $(this).text()
        let tagId = $(this).attr('id');

        const activeTagClass = "px-2 bg-title-green rounded text-white shadow-lg uppercase"
        const inactiveTagClass =
            "px-2 hover:bg-title-green hover:rounded hover:text-white hover:shadow-lg uppercase"

        $(`button[id^=${prefixTag}]`).removeClass().addClass(inactiveTagClass);
        $(`#${tagId}`).removeClass().addClass(activeTagClass);

        renderGalleries(typeState, name)
    })

    const renderGalleries = (type, tag) => {
        let url = new URL(`${baseURL}/api/gallery`)

        if (type !== '' && type !== undefined) {
            typeState = type
            url.searchParams.append('type', type)
        }

        if (tag == 'ALL') {
            tag = ''
        }

        if (tag !== '' && tag !== undefined) {
            url.searchParams.append('tags', tag)
        }

        $('#galleries-component').empty()
        

        $.ajax({
            url: url,
            method: 'get',
        }).then((galleries) => {
            createGalleryComponent(galleries, type);
            
        });
    }

    const createGalleryComponent = (medias, mediaType) => {
        
        let isLightBox = '';
        let mediaElement = '';
        let mediaOverlay = '';
        let mediaHref = '';
        medias.forEach(media => {
            if (mediaType == 'image' ) {
                isLightBox = 'data-lightbox="Gallery"';
                mediaElement = 'img'
                $(`#border-component`).addClass(`mt-6 border-b-2 border-t-2 border-title-green`);
                $(`#tags-component`).show();
                mediaOverlay = `<div class="absolute inset-0 z-10 items-center justify-center my-auto duration-300 opacity-0 xl:h-40 sm:h-auto bg-navbar-green group-hover:opacity-90 bg-opacity-90">
                        </div>
                        <div class="absolute flex justify-center mx-auto align-middle xl:top-12 sm:top-6 xl:left-12 sm:left-2">
                            <h1 class="z-10 mx-auto text-center text-white uppercase opacity-0 group-hover:opacity-100 xl:w-64 sm:w-auto font-400 xl:text-2xl sm:text-sm">
                                ${media.description}
                                <img class="mx-auto xl:block sm:hidden xl:w-auto xl:h-auto sm:w-12 sm:h-12" src="/img/view-img.png" alt="">
                            </h1>    
                        </div>`
                mediaHref = 'href'
                
            } else {
                $(`#border-component`).removeClass();
                $(`#border-component`).addClass(`mt-6 border-t-2 border-title-green`);
                $(`#tags-component`).hide();
                mediaElement = 'video controls'
                mediaHref = '#'
            }
            const mediaURL = `${awsURL}/${media.attachment}`
            component =
                `<div class="relative cursor-pointer group image-animation">
                    <a ${mediaHref}="${mediaURL}" ${isLightBox} data-title="${media.description}" class="relative">
                        ${mediaOverlay}
                        <div class="content-center ">
                            <${mediaElement} id="" class="rounded-xl object-contain shadow-lg xl:w-[350px] sm:w-[175px] xl:h-[240px] sm:h-[120px]" src="${mediaURL}" class="mx-auto" alt="">
                        </div>
                    </a>
                </div>`
            $("#galleries-component").append(component);
        });

        if (medias.length == 0) {
            const component = `<div class="flex flex-col w-full text-center text-footer-black font-400 font-lato">
                    <div class="flex items-center justify-center pt-4 pb-2 mx-auto gap-x-2 xl:gap-y-0 sm:gap-y-2 xl:grid-cols-7 sm:grid-cols-2 xl:text-xl sm:text-sm xl:flex-nowrap sm:flex-wrap">
                        <div class="text-center">
                            <h1 class="text-center text-black uppercase font-400 font-lato">Tidak ada data...</h1>
                        </div>
                    </div>
                </div>`
            $("#galleries-component").append(component)
        }
    }

    const createTagsComponent = tags => {
        tags.forEach(tag => {
            component = `<button id="tag-${tag.id}" 
                            class="px-4 uppercase hover:bg-title-green hover:rounded hover:text-white hover:shadow-lg">
                            ${tag.name.en}
                        </button>`
            $("#tags-component").append(component);
        });
            
    }

    const renderTags = () => {
        $.ajax({
            url: '/api/gallery/tags',
            method: 'get',
            async: false
        }).then((tags) => {
            createTagsComponent(tags);
        });
    }

    $(document).ready(function () {
        renderGalleries('image');
        renderTags()
        
    });

</script>

@endsection
<style>
    .font-family {
        font-family: 'Bebas Neue', cursive;
    }
    .image-animation {
        transition: transform .2s;
    }
    .image-animation:hover {
        -ms-transform: scale(1.1); /* IE 9 */
        -webkit-transform: scale(1.1); /* Safari 3-8 */
        transform: scale(1.1); 
    }
</style>