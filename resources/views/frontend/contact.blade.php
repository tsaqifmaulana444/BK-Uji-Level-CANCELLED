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

    <section>

        <div class="mx-auto w-fit mt-[6vh]">
            <h1 class="font-extrabold text-5xl mx-auto w-fit">Contact Person</h1>
            <p class="font-medium text-lg mx-auto w-fit">Silahkan Dirapihkan</p>
        </div>

        <div class="flex w-[70vw] mx-auto justify-evenly mt-12">

            <div
                class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                <div class="flex flex-col items-center py-10">
                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset('Assets/tes.jpg') }}"
                        alt="Bonnie image" />
                    <h5 class="mb-1 text-xl font-medium text-gray-900">N'golo Kante</h5>
                    <span class="text-sm text-gray-500">Central Midfilder</span>
                    <div class="flex mt-4 space-x-3 md:mt-6">
                        <a href="#"
                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-[#629460] rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Add
                            friend</a>
                    
                    </div>
                </div>
            </div>

            <div
                class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                <div class="flex flex-col items-center py-10">
                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset('Assets/tes.jpg') }}"
                        alt="Bonnie image" />
                    <h5 class="mb-1 text-xl font-medium text-gray-900">Sadio Mane</h5>
                    <span class="text-sm text-gray-500">Winger</span>
                    <div class="flex mt-4 space-x-3 md:mt-6">
                        <a href="#"
                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-[#629460] rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Add
                            friend</a>
                    
                    </div>
                </div>
            </div>
        </div>
        <div class="flex w-[70vw] mx-auto justify-evenly mt-8 mb-16">
            <div
                class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                <div class="flex flex-col items-center py-10">
                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset('Assets/tes.jpg') }}"
                        alt="Bonnie image" />
                    <h5 class="mb-1 text-xl font-medium text-gray-900">Samuel Umtiti</h5>
                    <span class="text-sm text-gray-500">Central Back</span>
                    <div class="flex mt-4 space-x-3 md:mt-6">
                        <a href="#"
                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-[#629460] rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Add
                            friend</a>
                    
                    </div>
                </div>
            </div>

            <div
                class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                <div class="flex flex-col items-center py-10">
                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset('Assets/tes.jpg') }}"
                        alt="Bonnie image" />
                    <h5 class="mb-1 text-xl font-medium text-gray-900">Ferland Mendy</h5>
                    <span class="text-sm text-gray-500">Right Back</span>
                    <div class="flex mt-4 space-x-3 md:mt-6">
                        <a href="#"
                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-[#629460] rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Add
                            friend</a>
                    
                    </div>
                </div>
            </div>

        </div>
    </section>

    @include('frontend.partials.footer')

    <script src="https://kit.fontawesome.com/4374417e55.js" crossorigin="anonymous"></script>

</body>

</html>
