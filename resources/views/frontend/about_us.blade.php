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
    <section id="about_us" class="bg-black">
        <div class="w-full h-[92vh] opacity-75"
            style="background-size: cover; background: url({{ asset('Assets/image13.png') }})">
            <div class="flex flex-col mx-auto w-fit">
                <div class="w-fit mt-[37vh]">
                    <h1 class="font-extrabold text-6xl mx-auto w-fit text-white">Tentang Kami</h1>
                    <h3 class="font-medium text-2xl mx-auto w-fit text-white">Seputar Informasi Mengenai Website Ini
                    </h3>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-[#ffffff] pt-8">
        {{-- panel kiri --}}
        <div class="flex w-[85vw] mx-auto pb-8 pt-12">
            <div class="w-[25vw] mr-6 rounded-lg">
                <img src="{{ asset('Assets/tes.jpg') }}" alt="" class="w-full rounded-lg">
            </div>
            <div class="">
                <h2 class="font-bold text-3xl text-[#232323]">Silahkan Dirapihkan Lagi</h2>
                <div class="w-[55vw] mt-3">
                    <p class="text-[#232323]">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum debitis,
                        corrupti illum ut quibusdam tempore magnam, expedita soluta ea corporis, et nihil. Ratione
                        magnam nostrum voluptatum cupiditate in commodi quidem?</p>
                </div>
            </div>
        </div>
        {{-- panel kanan --}}
        <div class="flex w-[85vw] mx-auto py-8">
            <div class="pr-6 pt-4">
                <h2 class="font-bold text-3xl text-[#232323]">Silahkan Dirapihkan Lagi</h2>
                <div class="w-[55vw] mt-3">
                    <p class="text-[#232323]">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum debitis,
                        corrupti illum ut quibusdam tempore magnam, expedita soluta ea corporis, et nihil. Ratione
                        magnam nostrum voluptatum cupiditate in commodi quidem?</p>
                </div>
            </div>
            <div class="w-[25vw] rounded-lg">
                <img src="{{ asset('Assets/tes.jpg') }}" alt="" class="w-full rounded-lg">
            </div>
        </div>
        {{-- panel kiri --}}
        <div class="flex w-[85vw] mx-auto pb-8 pt-8">
            <div class="w-[25vw] mr-6 rounded-lg">
                <img src="{{ asset('Assets/tes.jpg') }}" alt="" class="w-full rounded-lg">
            </div>
            <div class="">
                <h2 class="font-bold text-3xl text-[#232323]">Silahkan Dirapihkan Lagi</h2>
                <div class="w-[55vw] mt-3">
                    <p class="text-[#232323]">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum debitis,
                        corrupti illum ut quibusdam tempore magnam, expedita soluta ea corporis, et nihil. Ratione
                        magnam nostrum voluptatum cupiditate in commodi quidem?</p>
                </div>
            </div>
        </div>
        {{-- panel kanan --}}
        <div class="flex w-[85vw] mx-auto pt-8 pb-16">
            <div class="pr-6 pt-4">
                <h2 class="font-bold text-3xl text-[#232323]">Silahkan Dirapihkan Lagi</h2>
                <div class="w-[55vw] mt-3">
                    <p class="text-[#232323]">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum debitis,
                        corrupti illum ut quibusdam tempore magnam, expedita soluta ea corporis, et nihil. Ratione
                        magnam nostrum voluptatum cupiditate in commodi quidem?</p>
                </div>
            </div>
            <div class="w-[25vw] rounded-lg">
                <img src="{{ asset('Assets/tes.jpg') }}" alt="" class="w-full rounded-lg">
            </div>
        </div>
    </section>
    <section class="mb-[15vh] mt-[6vh] flex flex-col">
        <div>
            <h3 class="font-bold text-2xl mx-auto w-fit text-[#232323] mb-3">Rekor Yang Telah Kami Raih</h3>
        </div>
        <div class="gambar bg-slate-300 w-[70vw] mx-auto h-[70vh]">
            <div class="w-full h-[70vh]">
                <div class="absolute bg-[#303030] w-full mt-[48vh] h-[22vh] opacity-40"></div>
                <p class="absolute text-white mt-[48vh]">tes1</p>
                <img src="{{ asset('Assets/tes.jpg') }}" alt="" srcset="" style="width: 100%">
            </div>
            <div class="w-full h-[70vh]">
                <div class="absolute bg-[#303030] w-full mt-[48vh] h-[22vh] opacity-40"></div>
                <p class="absolute text-white mt-[48vh]">tes2</p>
                <img src="{{ asset('Assets/images.jpeg') }}" alt="" srcset="" style="width: 100%">
            </div>
            <div class="w-full h-[70vh]">
                <div class="absolute bg-[#303030] w-full mt-[48vh] h-[22vh] opacity-40"></div>
                <p class="absolute text-white mt-[48vh]">tes3</p>
                <img src="{{ asset('Assets/download(1).jpeg') }}" alt="" srcset="" style="width: 100%">
            </div>
        </div>
    </section>

    @include('frontend.partials.footer')

    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/4374417e55.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $('.gambar').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            prevArrow: '<span class="bg-[#000000] py-2 px-4 rounded-full absolute mt-[30.5vh] ml-[1.5vw] z-40 opacity-40"><i class="fa-solid fa-angle-left text-center text-white"></i></span>',
            nextArrow: '<span class="bg-[#000000] py-2 px-4 rounded-full absolute mt-[-39.5vh] ml-[65vw] z-40 opacity-40"><i class="fa-solid fa-angle-right text-center text-white"></i></span>',
        });
    </script>
</body>

</html>
