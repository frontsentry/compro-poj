@extends('layouts.main')

@section('content')
<div class="pt-20">
    <img class="w-full" src="/img/contact/WBS-banner.png" alt="">
</div>
<div class="h-auto text-footer-black">
    <div class="xl:w-[1206px] xl:mx-auto sm:w-full sm:mx-0 xl:px-0 sm:px-2 flex xl:flex-row sm:flex-col">
        <div class="flex flex-col xl:w-3/5 sm:w-full">
            <div class="mt-6">
                <h1 class="uppercase text-title-green xl:text-4xl sm:text-3xl font-family">formulir <span class="text-footer-black">pengaduan</span></h1>
                
            </div>

            <form class="text-footer-black font-lato font-400" action="{{ route('create-report') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <p class="py-4 text-lg">Nama Pelapor:</p>
                    <input style="resize: none"
                        class="bg-side-gray items-center px-1 xl:w-[744px] sm:w-full h-[51px] rounded-xl shadow-lg font-400 font-lato text-xl"
                        name="name" id="" type="text" >
                </div>
                <div>
                    <div class="flex flex-row ">
                        <p class="flex flex-row items-center py-4 text-lg">Email:</p> 
                        
                        
                    </div>
                    <input style="resize: none"
                        class="bg-side-gray items-center px-1 xl:w-[744px] sm:w-full h-[51px] rounded-xl shadow-lg font-400 font-lato text-xl"
                        name="email" id="" type="email">
                </div>
                <div>
                    <div class="flex flex-row ">
                        <p class="flex flex-row items-center py-4 text-lg">Nomor Kontak Pelapor:</p> 
                        
                    </div>
                    <input style="resize: none"
                        class="bg-side-gray items-center px-1 xl:w-[744px] sm:w-full h-[51px] rounded-xl shadow-lg font-400 font-lato text-xl"
                        name="contact_name" id="" type="number" >
                </div>
                <div>
                    <div class="flex flex-row ">
                        <p class="flex flex-row items-center py-4 text-lg">Perihal:</p> 
                        <div class="flex items-center ml-1">
                            <span class="text-[#FF0000] ">*)</span>
                        </div>
                        
                        <div class="mt-[20px]">
                            <span class="text-xs text-[#FF0000] ">Wajib Diisi</span>
                        </div>
                        
                    </div>
                    <input style="resize: none"
                        class="bg-side-gray items-center px-1 xl:w-[744px] sm:w-full h-[51px] rounded-xl shadow-lg font-400 font-lato text-xl"
                        name="description" id="" type="text" required>
                </div>

                <div>
                    <div class="flex flex-row ">
                        <p class="flex flex-row items-center py-4 text-lg">Perbuatan berindikasi pelanggaran yang diketahui (what):</p> 
                        <div class="flex items-center ml-1">
                            <span class="text-[#FF0000] ">*)</span>
                        </div>
                        
                        <div class="mt-[20px]">
                            <span class="text-xs text-[#FF0000] ">Wajib Diisi</span>
                        </div>
                        
                    </div>
                    <textarea style="resize: none"
                        class="bg-side-gray p-1 xl:w-[744px] sm:w-full h-[107px] rounded-xl shadow-lg font-400 font-lato text-xl"
                        name="violation" id="" required></textarea>
                </div>

                <div>
                    <div class="flex flex-row ">
                        <p class="flex flex-row items-center py-4 text-lg">Dimana perbuatan tersebut dilakukan (where):</p> 
                        <div class="flex items-center ml-1">
                            <span class="text-[#FF0000] ">*)</span>
                        </div>
                        
                        <div class="mt-[20px]">
                            <span class="text-xs text-[#FF0000] ">Wajib Diisi</span>
                        </div>
                        
                    </div>
                    <textarea style="resize: none"
                        class="bg-side-gray p-1 xl:w-[744px] sm:w-full h-[107px] rounded-xl shadow-lg font-400 font-lato text-xl"
                        name="violation_place" id="" required></textarea>
                </div>
                
                <div>
                    <div class="flex flex-row ">
                        <p class="flex flex-row items-center py-4 text-lg">Unit Kejadian:</p> 
                        <div class="flex items-center ml-1">
                            <span class="text-[#FF0000] ">*)</span>
                        </div>
                        
                        <div class="mt-[20px]">
                            <span class="text-xs text-[#FF0000] ">Wajib Diisi</span>
                        </div>
                        
                    </div>
                    <select class="bg-side-gray px-1 xl:w-[744px] sm:w-full h-[51px] rounded-xl shadow-lg font-400 font-lato text-xl"
                        name="unit" id="">
                        <option selected disabled hidden>Pilih Unit</option>
                        <option value="kantor_pusat">Kantor Pusat
                        </option>
                        <option value="kantor_perwakilan">Kantor Perwakilan
                        </option>
                        <option value="kantor_area">Kantor Area
                        </option>
                        <option value="lainnya">Lainnya
                        </option>
                    </select>
                    
                </div>

                <div>
                    <div class="flex flex-row ">
                        <p class="flex flex-row items-center py-4 text-lg">Pekerjaan / Jabatan terlapor:</p> 
                        <div class="flex items-center ml-1">
                            <span class="text-[#FF0000] ">*)</span>
                        </div>
                        
                        <div class="mt-[20px]">
                            <span class="text-xs text-[#FF0000] ">Wajib Diisi</span>
                        </div>
                        
                    </div>
                    <select class="bg-side-gray px-1 xl:w-[744px] sm:w-full h-[51px] rounded-xl shadow-lg font-400 font-lato text-xl"
                        name="unit_position" id="">
                        <option selected disabled hidden>Pilih Jabatan</option>
                        <option value="dewan_komisaris">Dewan Komisaris
                        </option>
                        <option value="direksi">Direksi
                        </option>
                        <option value="general_manager">General Manager
                        </option>
                        <option value="manager">Manager
                        </option>
                        <option value="regional_manager">Regional Manager
                        </option>
                        <option value="area_manager">Area Manager
                        </option>
                        <option value="staf">Staf
                        </option>
                        <option value="rekanan">Rekanan
                        </option>
                        <option value="lainnya">lainnya
                        </option>
                    </select>
                    
                </div>

                <div>
                    <div class="flex flex-row ">
                        <p class="flex flex-row items-center py-4 text-lg">Kapan perbuatan tersebut dilakukan (when):</p> 
                        <div class="flex items-center ml-1">
                            <span class="text-[#FF0000] ">*)</span>
                        </div>
                        
                        <div class="mt-[20px]">
                            <span class="text-xs text-[#FF0000] ">Wajib Diisi</span>
                        </div>
                        
                    </div>
                    <textarea style="resize: none"
                        class="bg-side-gray p-1 xl:w-[744px] sm:w-full h-[107px] rounded-xl shadow-lg font-400 font-lato text-xl"
                        name="violation_time" id="" required></textarea>
                </div>

                <div>
                    <div class="flex flex-row ">
                        <p class="flex flex-row items-center py-4 text-lg">Siapa saja yang terlibat dalam perbuatan tersebut (who):</p> 
                        <div class="flex items-center ml-1">
                            <span class="text-[#FF0000] ">*)</span>
                        </div>
                        
                        <div class="mt-[20px]">
                            <span class="text-xs text-[#FF0000] ">Wajib Diisi</span>
                        </div>
                        
                    </div>
                    <textarea style="resize: none"
                        class="bg-side-gray p-1 xl:w-[744px] sm:w-full h-[107px] rounded-xl shadow-lg font-400 font-lato text-xl"
                        name="violation_peoples" id="" required></textarea>
                </div>

                <div>
                    <div class="flex flex-row ">
                        <p class="items-center py-4 text-lg">Bagaimana perbuatan tersebut dilakukan misalnya apa modusnya, bagaimana caranya, dsb (how):
                            <span class="text-[#FF0000] ">*)</span>
                            <span class="text-xs text-[#FF0000]">Wajib Diisi</span>
                        </p> 
                    </div>
                    <textarea style="resize: none"
                        class="bg-side-gray p-1 xl:w-[744px] sm:w-full h-[107px] rounded-xl shadow-lg font-400 font-lato text-xl"
                        name="violation_description" id="" required></textarea>
                </div>

                <div>
                    <div class="flex flex-row ">
                        <p class="flex flex-row items-center py-4 text-lg">Sumber Informasi</p> 
                        <div class="flex items-center ml-1">
                            <span class="text-[#FF0000] ">*)</span>
                        </div>
                        
                        <div class="mt-[20px]">
                            <span class="text-xs text-[#FF0000] ">Wajib Diisi</span>
                        </div>
                        
                    </div>
                    <select class="bg-side-gray px-1 xl:w-[744px] sm:w-full h-[51px] rounded-xl shadow-lg font-400 font-lato text-xl"
                        name="source" id="">
                        <option class="" value="" selected disabled hidden>--Silahkan pilih sumber informasi--</option>
                        <option value="po_box">PO BOX
                        </option>
                        <option value="fax">FAX
                        </option>
                        <option value="telp">TELP
                        </option>
                        <option value="sms">SMS
                        </option>
                        <option value="kantor">KANTOR
                        </option>
                        <option value="email">EMAIL
                        </option>
                        <option value="langsung">LANGSUNG
                        </option>
                    </select>
                    
                </div>

                <div id="sent">
                    <div class="flex flex-row ">
                        <p class="flex flex-row items-center py-4 text-lg">Bukti/Pendukung:</p> 
                        <div class="flex items-center ml-1">
                            <span class="text-[#FF0000] ">*)</span>
                        </div>
                        
                        <div class="mt-[20px]">
                            <span class="text-xs text-[#FF0000] ">Wajib Diisi</span>
                        </div>
                        
                    </div>
                    <input style="resize: none"
                        class="bg-side-gray items-center py-2 px-4 xl:w-[744px] sm:w-full h-[51px] rounded-xl shadow-lg font-400 font-lato text-xl"
                        name="file" id="" type="file">
                </div>
                    @if (session('error-captcha'))  
                    <div class="items-center px-3 py-0 text-red-500 font-lato font-400 text-lg mt-6 -mb-8">
                       <strong>{{session('error-captcha')}}</strong> 
                    </div>  
                    
                    @endif
                <div class="mt-10">
                    <div class="flex flex-row">
                        <img id="captcha-image" src={{ Captcha::src() }} alt="captcha image">
                        <button id="captcha-reload" class="px-4 mx-2 mt-2 text-xl shadow-lg bg-side-gray rounded-xl font-200 font-lato" type="button">Reload</button>
                        
                    </div>
                    <input name="captcha" class="mt-4 bg-side-gray px-5 w-[346px] h-[51px] rounded-xl shadow-lg font-400 font-lato text-xl"
                        placeholder="Silahkan Masukan Kode Captcha*" type="text" required>
                </div>
                
                <div class="flex">
                    <div class="xl:mt-10 sm:mt-6">
                        <button type="submit" class="py-2 text-white rounded-lg xl:px-6 sm:px-4 xl:mr-2 sm:mr-0 xl:text-xl sm:text-lg bg-title-green hover:bg-light-green hover:text-white font-lato font-400">Kirim</button>
                    </div>
                    @if (session('report-success'))
                    <div class="py-2 ml-10">
                        <div class="flex flex-row rounded-lg items-center px-3 py-0 bg-light-green xl:ml-10 sm:ml-12 xl:mt-10 sm:mt-6 font-lato font-400 text-lg text-white">
                                {{ session('report-success')}}
                            
                            <img class="mx-auto ml-2" src="/img/checklist-ic.png" alt="">
                            
                        </div>
                    </div>
                    @endif
                    
                </div>
                
            </form>
        </div>

        <div class="xl:w-2/5 sm:w-full xl:block sm:block xl:px-2 sm:px-4 xl:pl-32 sm:ml-0 xl:mt-8 sm:mt-12 font-lato font-400">
            <div style="background-color: #E7F0EA;" class="w-full px-2 pt-2 pb-6 rounded-lg shadow-lg">
                <h1 class="ml-1 text-navbar-green font-lato text-md"></h1>
                <div class="px-4">
                    <a href="{{ route('whistle-blowing-system') }}" class="">
                        <div class="w-full bg-side-gray hover:bg-light-green rounded-md shadow-lg px-4 mt-3 py-1">
                           <p class="text-center font-lato font-400 text-xl"> Beranda</p>
                        </div>
                    </a>
                    <a href="{{ route('how-to-report') }}" class="">
                    <div class="w-full bg-side-gray hover:bg-light-green rounded-md shadow-lg px-4 mt-3 py-1">
                           <p class="text-center font-lato font-400 text-xl"> Cara Melapor</p>
                        </div>
                    </a>
                    <a href="{{ route('report') }}" class="">
                    <div class="w-full bg-light-green rounded-md shadow-lg px-4 mt-3 py-1">
                           <p class="text-center font-lato font-400 text-xl"> Lapor !!!</p>
                        </div>
                    </a>
                </div> 
            </div>

            <div style="background-color: #E7F0EA;" class="rounded-lg p-4 w-full shadow-lg ml-1 mt-14 font-lato font-400">
                <h1 class="text-title-green text-[16px] font-[800]">Bagaimana <span class="text-footer-black">Menghubungi Kami?</span></h1>
                <p>Anda dapat menghubungi melalui fitur lapor pada website dan email berikut :</p>
                <div class="mt-4">
                   
                    <div class="flex flex-row mt-4">
                        <div>
                            <svg width="50" height="50" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g clip-path="url(#a)"><path d="M24.965 50C11.165 50 0 38.766 0 25.035 0 11.235 11.234 0 24.965 0c13.8 0 24.966 11.234 24.966 24.965C50 38.765 38.766 50 24.965 50Z" fill="url(#b)"/><mask id="d" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-1" y="-1" width="52" height="52"><path fill="url(#c)" d="M-.057-.057h50.104v50.104H-.057z"/></mask><g mask="url(#d)"><path d="M24.966 48.058c12.754 0 23.093-10.339 23.093-23.093 0-12.753-10.34-23.092-23.093-23.092-12.754 0-23.093 10.339-23.093 23.092 0 12.754 10.34 23.093 23.093 23.093Z" fill="url(#e)"/></g><g opacity=".8" fill="#36A3D2"><path opacity=".8" d="M38.212 16.505c0 .07-.07.07-.139.139l-9.154 10.471c-.97 1.11-2.427 1.734-3.883 1.734-1.526 0-2.913-.624-3.884-1.734l-9.431-10.61c-.139.416-.278.832-.278 1.248V29.75a5.594 5.594 0 0 0 5.618 5.618h15.81a5.594 5.594 0 0 0 5.618-5.618V17.753c0-.416-.07-.832-.277-1.248Z"/><path opacity=".8" d="M23.164 25.243c.485.554 1.11.832 1.803.832.693 0 1.317-.278 1.803-.832l9.223-10.472c0-.07.07-.07.139-.07-.277-.069-.555-.138-.832-.138H14.703c-.277 0-.554.07-.832.139l9.293 10.54Z"/></g></g><defs><linearGradient id="b" x1="7.326" y1="7.326" x2="42.644" y2="42.644" gradientUnits="userSpaceOnUse"><stop stop-color="#FCFCFC"/><stop offset="1" stop-color="#E6E6E6"/></linearGradient><linearGradient id="e" x1="40.563" y1="40.563" x2="-1.063" y2="-1.063" gradientUnits="userSpaceOnUse"><stop stop-color="#FCFCFC"/><stop offset="1" stop-color="#F4F5FA"/></linearGradient><clipPath id="a"><path fill="#fff" d="M0 0h50v50H0z"/></clipPath><pattern id="c" patternContentUnits="objectBoundingBox" width="1" height="1"><use xlink:href="#f" transform="scale(.00467)"/></pattern><image id="f" width="214" height="214" xlink:href="data:image/jpeg;base64,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"/></defs></svg>
                        </div>
                        <div class="text-footer-black font-lato font-400 px-3 leading-6 mt-4">
                            <h1 class="font-bold">Email</h1>
                            <p class="text-left">wbs@optimajasa.co.id</p>

                        </div>
                    </div>
                    <div class="flex flex-row mt-4">
                        <div>
                            <svg width="50" height="50" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g clip-path="url(#a)"><path d="M24.965 50C11.165 50 0 38.766 0 25.035 0 11.235 11.234 0 24.965 0c13.8 0 24.966 11.234 24.966 24.965C50 38.765 38.766 50 24.965 50Z" fill="url(#b)"/><mask id="d" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-1" y="-1" width="52" height="52"><path fill="url(#c)" d="M-.057-.057h50.104v50.104H-.057z"/></mask><g mask="url(#d)"><path d="M24.966 48.058c12.754 0 23.093-10.339 23.093-23.093S37.719 1.872 24.966 1.872c-12.754 0-23.093 10.34-23.093 23.093 0 12.754 10.34 23.093 23.093 23.093Z" fill="url(#e)"/></g><path d="M24.966 12.205c-5.617 0-10.195 4.577-10.195 10.194 0 4.092 5.41 11.027 8.392 14.494a2.445 2.445 0 0 0 3.675 0c2.913-3.467 8.391-10.402 8.391-14.494-.07-5.617-4.646-10.194-10.263-10.194Zm0 15.326a5.594 5.594 0 0 1-5.617-5.617 5.594 5.594 0 0 1 5.617-5.617 5.594 5.594 0 0 1 5.617 5.617 5.594 5.594 0 0 1-5.617 5.617Z" fill="red"/><path d="M24.966 19.487c-1.317 0-2.427 1.11-2.427 2.427 0 1.318 1.11 2.427 2.427 2.427 1.318 0 2.427-1.11 2.427-2.427a2.412 2.412 0 0 0-2.427-2.427Z" fill="red"/></g><defs><linearGradient id="b" x1="7.326" y1="7.326" x2="42.644" y2="42.645" gradientUnits="userSpaceOnUse"><stop stop-color="#FCFCFC"/><stop offset="1" stop-color="#E6E6E6"/></linearGradient><linearGradient id="e" x1="40.563" y1="40.563" x2="-1.063" y2="-1.063" gradientUnits="userSpaceOnUse"><stop stop-color="#FCFCFC"/><stop offset="1" stop-color="#F4F5FA"/></linearGradient><clipPath id="a"><path fill="#fff" d="M0 0h50v50H0z"/></clipPath><pattern id="c" patternContentUnits="objectBoundingBox" width="1" height="1"><use xlink:href="#f" transform="scale(.00467)"/></pattern><image id="f" width="214" height="214" xlink:href="data:image/jpeg;base64,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"/></defs></svg>
                        </div>
                        <div class="text-footer-black font-lato font-400 px-3 leading-6 mt-4">
                            <h1 class="font-bold">Alamat</h1>
                            <p class="text-left">Jl. Laksamana Malahayati<br> 
                                No.6 Kel. Cipinang Muara,<br> 
                                Kec. Jatinegara Kota<br> Jakarta Timur, DKI<br> Jakarta - 13420</p>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>

        
    </div>
    <div class=" -mt-32 h-[315px] mx-auto flex items-center w-full bg-center bg-no-repeat xl:bg-auto sm:bg-cover" style="background-image: url('/img/contact/footer-green-wbs.png')">
        <div class="flex xl:flex-row sm:flex-col items-center w-full xl:w-[1206px] xl:mx-auto sm:w-full sm:mx-0 xl:px-0 sm:px-2 mt-52">
            <div class="flex flex-col xl:w-[1000px] sm:w-full xl:mr-12 sm:mr-0">
                <div class="leading-8 text-white xl:text-2xl sm:text-lg font-lato font-400">
                    <h1>2021 &#169; Satuan Pengawas Intern - PT Pesonna Optima Jasa
                    </h1>
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

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script>    
    $(document).ready(function() {
        $('#captcha-reload').click(function(e) {
            e.preventDefault();
            
            $.get('/api/captcha', function(data) {
                $('#captcha-image').attr('src', data.captcha);
            });
        })
    })
</script>
