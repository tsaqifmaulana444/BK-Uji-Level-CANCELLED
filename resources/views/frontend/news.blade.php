<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- link font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">

    {{-- slick --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">

    @vite('resources/css/app.css')
</head>

<body class="font-[Ubuntu]">
    @include('frontend.partials.navbar')

    <section class="flex mb-8">
        {{-- panel kiri --}}
        <div class="h-[90vh] w-[45vw]  mt-[8vh] mb-[4vh]">
            <div class="w-full h-[56vh]">
                <h1 class="ml-[1.5vw] font-bold text-3xl pb-2">Berita Terbaru</h1>
                <img src="{{ asset("Assets/downloadspace.jpeg") }}" alt="" srcset="" class="bg-green-200 w-[42vw] h-[45vh] mx-auto">
                <p class="ml-[1.6vw] text-black opacity-50 mt-3">April 3, 2023</p>
            </div>
            <div class="flex flex-col w-[42vw] mx-auto mt-[4vh] ">
                <h1 class="font-bold text-xl">Diketahui Jarak Matahari Ke Planet A Adalah 100 KM</h1>
                <p class="font-normal text-base mt-1">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium cupiditate est quos maiores, reprehenderit sit. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, unde.</p>
                <a href="" class="hover:underline hover:underline-offset-1 mt-4 text-base">Baca Lebih Lengkap</a>
            </div>
        </div>
        {{-- panel kanan --}}
        <div class="h-full mt-[10vh] flex flex-col pb-8 w-[51vw] mx-auto border-l border-[#777777] pl-5">
            <div class="flex justify-between mt-3 border-b  border-black pb-4">
                <div class="pt-3 w-[80%]">
                    <p class="text-black opacity-50">April 4, 2020</p>
                    <h1 class="font-bold text-xl mt-4">Apakah Eksistensi PHP Harus Dipertahankan? Ini Pendapat Ahli Javascript</h1>
                    
                    <p class="hover:underline hover:underline-offset-1 cursor-pointer mt-8">Baca Lebih Lengkap</p>
                </div>
                <div class="w-[22vw] h-[25vh]">
                    <img src="{{ asset("Assets/download.jpeg") }}" alt="" class="w-[100%] h-[100%]">
                </div>
            </div>
            <div class="flex justify-between mt-3 border-b border-[#777777] pb-4">
                <div class="pt-3 w-[80%]">
                    <p class="text-black opacity-50">April 4, 2020</p>
                    <h1 class="font-bold text-xl mt-4">Apakah Eksistensi PHP Harus Dipertahankan? Ini Pendapat Ahli Javascript</h1>
                    
                    <p class="hover:underline hover:underline-offset-1 cursor-pointer mt-8">Baca Lebih Lengkap</p>
                </div>
                <div class="w-[22vw] h-[25vh]">
                    <img src="{{ asset("Assets/download.jpeg") }}" alt="" class="w-[100%] h-[100%]">
                </div>
            </div>
            <div class="flex justify-between mt-3 border-b border-[#777777] pb-4">
                <div class="pt-3 w-[80%]">
                    <p class="text-black opacity-50">April 4, 2020</p>
                    <h1 class="font-bold text-xl mt-4">Apakah Eksistensi PHP Harus Dipertahankan? Ini Pendapat Ahli Javascript</h1>
                    
                    <p class="hover:underline hover:underline-offset-1 cursor-pointer mt-8">Baca Lebih Lengkap</p>
                </div>
                <div class="w-[22vw] h-[25vh]">
                    <img src="{{ asset("Assets/download.jpeg") }}" alt="" class="w-[100%] h-[100%]">
                </div>
            </div>
            <div class="flex justify-between mt-3 border-b border-[#777777] pb-4">
                <div class="pt-3 w-[80%]">
                    <p class="text-black opacity-50">April 4, 2020</p>
                    <h1 class="font-bold text-xl mt-4">Apakah Eksistensi PHP Harus Dipertahankan? Ini Pendapat Ahli Javascript</h1>
                    
                    <p class="hover:underline hover:underline-offset-1 cursor-pointer mt-8">Baca Lebih Lengkap</p>
                </div>
                <div class="w-[22vw] h-[25vh]">
                    <img src="{{ asset("Assets/download.jpeg") }}" alt="" class="w-[100%] h-[100%]">
                </div>
            </div>
            <div class="flex justify-between mt-3 border-b border-[#777777] pb-4">
                <div class="pt-3 w-[80%]">
                    <p class="text-black opacity-50">April 4, 2020</p>
                    <h1 class="font-bold text-xl mt-4">Apakah Eksistensi PHP Harus Dipertahankan? Ini Pendapat Ahli Javascript</h1>
                    
                    <p class="hover:underline hover:underline-offset-1 cursor-pointer mt-8">Baca Lebih Lengkap</p>
                </div>
                <div class="w-[22vw] h-[25vh]">
                    <img src="{{ asset("Assets/download.jpeg") }}" alt="" class="w-[100%] h-[100%]">
                </div>
            </div>
            <div class="flex justify-between mt-3 border-b border-[#777777] pb-4">
                <div class="pt-3 w-[80%]">
                    <p class="text-black opacity-50">April 4, 2020</p>
                    <h1 class="font-bold text-xl mt-4">Apakah Eksistensi PHP Harus Dipertahankan? Ini Pendapat Ahli Javascript</h1>
                    
                    <p class="hover:underline hover:underline-offset-1 cursor-pointer mt-8">Baca Lebih Lengkap</p>
                </div>
                <div class="w-[22vw] h-[25vh]">
                    <img src="{{ asset("Assets/download.jpeg") }}" alt="" class="w-[100%] h-[100%]">
                </div>
            </div>
            <div class="flex justify-between mt-3 border-b border-[#777777] pb-4">
                <div class="pt-3 w-[80%]">
                    <p class="text-black opacity-50">April 4, 2020</p>
                    <h1 class="font-bold text-xl mt-4">Apakah Eksistensi PHP Harus Dipertahankan? Ini Pendapat Ahli Javascript</h1>
                    
                    <p class="hover:underline hover:underline-offset-1 cursor-pointer mt-8">Baca Lebih Lengkap</p>
                </div>
                <div class="w-[22vw] h-[25vh]">
                    <img src="{{ asset("Assets/download.jpeg") }}" alt="" class="w-[100%] h-[100%]">
                </div>
            </div>
        </div>
    </section>

    @include('frontend.partials.footer')

    <script src="https://kit.fontawesome.com/4374417e55.js" crossorigin="anonymous"></script>

</body>

</html>
