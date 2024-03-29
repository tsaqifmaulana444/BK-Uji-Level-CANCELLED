<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - KonsulYuk</title>

    {{-- link font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">

    {{-- link icon --}}
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

    @vite('resources/css/app.css')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body class="font-[Ubuntu] overflow-x-hidden">
    @include('frontend.partials.navbar')
    <section class="bg-[#629460] w-full h-[100vh] text-[#393053] relative">
        <div>
            <div id="teks" class="flex mx-auto w-fit relative top-[19vh]">
                <div class=" mt-[2vh]">
                    <div class="w-[34vw] ml-[0vw] mt-6">
                        <h1 class="text-white text-[350%] font-extrabold leading-tight" >BK コンサルティングがさらに詳しくなりました
                            簡単</h1>
                        {{-- <h1 class="text-white text-[350%] font-extrabold leading-tight" >Konsultasi BK Kini Jadi Lebih
                                Mudah</h1> --}}
                    </div>
                    <div class="w-[40vw] ml-[0vw] mt-8 ">
                        <h3 class="text-white text-[120%]"> タルナブハクチせんもんこうこう がコンサルティングサービスを提供するようになりました
                            学生は無料です。BK を恐れる必要はありません。
                            聞いてください。</h3>
                        {{-- <h3 class="text-white text-[120%]">Kini SMK Taruna Bhakti telah menyediakan layanan konsultasi
                            untuk siswa siswi secara gratis, jangan takut dengan BK, mereka terbuka untuk
                            mendengarkanmu.</h3> --}}
                    </div>
                </div>
                <div class="w-[30vw] ml-[14vw] ">
                    <img src="{{ asset('Assets/Conversation _Monochromatic 2.png') }}" alt="conversation" srcset=""
                        class="w-fit mx-auto">
                </div>
            </div>
        </div>
      
    </section>
    <section class="mt-[0vh] mb-[10vh]">
        <div>
            <div class="w-[70vw] mx-auto mt-[10vh]" >
                <h1 class="text-[#232323] w-fit mx-auto text-[260%] font-extrabold ">Berita Tentang Kami</h1>
                <h3 class="text-[#232323] w-fit mx-auto text-[110%] font-normal">Beberapa informasi tentang website kami
                </h3>
            </div>
            <div id="card" class="flex flex-row w-[85vw] justify-evenly mx-auto mt-[7vh]">

                <div class="w-[25vw] h-[60vh] bg-white border border-gray-200 rounded-lg shadow">
                    <a href="#">
                        <img class="rounded-t-lg w-[100%]" src="{{ asset('Assets/wp_login.jpg') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5
                                class="mb-2 text-2xl font-bold tracking-tight text-gray-900 hover:underline hover:underline-offset-1">
                                Noteworthy technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 text-sm text-gray-700 ">Here are the biggest enterprise technology acquisitions
                            of 2021 so far, in reverse chronological order.</p>

                    </div>
                </div>

                <div class="w-[25vw] h-[60vh] bg-white border border-gray-200 rounded-lg shadow">
                    <a href="#">
                        <img class="rounded-t-lg w-[100%]" src="{{ asset('Assets/wp_login.jpg') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5
                                class="mb-2 text-2xl font-bold tracking-tight text-gray-900 hover:underline hover:underline-offset-1">
                                Noteworthy technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 text-sm text-gray-700">Here are the biggest enterprise technology acquisitions of
                            2021 so far, in reverse chronological order.</p>

                    </div>
                </div>

                <div class="w-[25vw] h-[60vh] bg-white border border-gray-200 rounded-lg shadow">
                    <a href="#">
                        <img class="rounded-t-lg w-[100%]" src="{{ asset('Assets/wp_login.jpg') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5
                                class="mb-2 text-2xl font-bold tracking-tight text-gray-900 hover:underline hover:underline-offset-1">
                                Noteworthy technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-6 text-sm text-gray-700">Here are the biggest enterprise technology acquisitions of
                            2021 so far, in reverse chronological order.</p>

                    </div>
                </div>

            </div>
            <div class="w-full mx-auto mt-[8vh]">
                <button type="button" onclick="location.href = '{{ route('news') }}'"
                    class="w-[40%] py-2.5 px-5 text-sm font-medium text-white bg-[#629460] rounded-lg border border-gray-200 hover:bg-[#83A37B] mx-[30%]">Baca
                    Lebih Lengkap</button>
            </div>
        </div>
    </section>
    
    @include('frontend.partials.footer')
</body>
<script>
    AOS.init();
</script>

</html>