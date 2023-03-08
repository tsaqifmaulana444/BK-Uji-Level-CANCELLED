<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - KonsulYuk</title>

    {{-- link font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Rubik&display=swap" rel="stylesheet">

    {{-- link icon --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    @vite('resources/css/app.css')
</head>
<body>
    <nav class="flex bg-[#40513B] pb-2 pt-2 w-full h-[8vh]">
        <div id="logo" class="flex ml-8 cursor-pointer">
            <img src="{{ asset("Assets/two-way-communication-removebg-preview.png") }}" alt="logoTb" srcset="" class="w-[35%]">
            <p class="text-[#ffffff] font-[Rubik] text-2xl font-extrabold my-1">KonsulYuk</p>
        </div>
        <div id="menu" class="ml-[28%] flex text-[#ffffff] font-[Poppins] text-xs h-[100%] w-[32%] justify-evenly font-bold	">
            <a href="">
                <p class="my-3 hover:text-slate-400 ">Home</p>
            </a>
            <a href="">
                <p class="my-3 hover:text-slate-400 ">Tentang Kami</p>
            </a>
            <a href="">
                <p class="my-3 hover:text-slate-400 ">Kontak</p>
            </a>
            <a href="">
                <p class="my-3 hover:text-slate-400 ">Kritik & Saran</p>
            </a>
        </div>
        <div id="login">
            <a href="/login">
                <button type="button" class="text-white bg-transparent border hover:text-slate-400 hover:border-slate-400 font-medium rounded-[6px] text-xs px-5 h-[80%] my-1 font-bold ml-52 w-[30%]">Login</button>
            </a>
        </div>
    </nav>
    <section class="bg-[#629460] w-full h-1/2 text-[#393053]">
        <div>
            <div id="teks">

            </div>
        </div>
    </section>
</body>
</html>

{{-- font-family: 'Poppins', sans-serif; --}}