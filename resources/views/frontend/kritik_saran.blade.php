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
    
    @vite('resources/css/app.css')
</head>
<body class="font-[Ubuntu]">
    @include('frontend.partials.navbar')    
    <div class="flex flex-col ml-[10.2vw] mt-[3.5vh]">
        <h1 class="font-extrabold text-[170%]">Kami Ingin Tau Lebih Kekurangan Kami</h1>
        <h4 class="font-medium text-[90%]">Bantu Kami Untuk Menjadi Lebih Baik Dengan Memberikan Kritik/Saran.</h4>
    </div>
    <div class="w-[80vw] bg-[#F9F9F9] h-[67vh] rounded-md z-30 drop-shadow-2xl mx-auto mt-[4.5vh] pt-2.5 mb-[4vh]">
        <form action="">
            @csrf
            <div class="flex ml-[4.6vw] w-fit mb-[1vh] mt-[1.5vh]">
                <p class="text-medium">Nama : </p>
                <input type="text" value="nama" readonly class="bg-[#F9F9F9] border border-none select-text focus:border-none ml-[0.5vw] focus:outline-none">
            </div>
            <p class="flex ml-[4.6vw] font-bold">Jenis Feedback</p>
            <div class="flex ml-[4.6vw] w-[15vw] justify-between mb-[1vh]">
                <input type="radio" name="input">
                <label>Kritik/Saran</label>

                <input type="radio" name="input">
                <label>Rate Us</label>
            </div>
            <p class="flex ml-[4.6vw] font-bold mb-[1vh]">Isi Feedback</p>
            <textarea name="" id="" cols="93" rows="9" class="bg-[#F0F0F0] flex w-fit mx-auto rounded-md rounded px-5 pt-4"></textarea>
            <input type="submit" value="Kirim" class="bg-[#629460] px-8 py-1.5 ml-[67.8vw] text-white mt-4 rounded-lg">
        </form>
    </div>
    
</body>
</html>