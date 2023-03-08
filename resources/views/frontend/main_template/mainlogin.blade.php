<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - KonsulYuk</title>

    {{-- link font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')

</head>
<body class="font-['Ubuntu']">
   <div id="main" class="flex h-screen bg-black">
        <div id="image" style="background: url({{ asset("Assets/wp_login.jpg") }}); background-size: cover;" class="w-[60%] h-screen opacity-70	">
        </div>
        
        @yield('content')

   </div>
</body>
</html>

{{-- font-family: 'Poppins', sans-serif; --}}