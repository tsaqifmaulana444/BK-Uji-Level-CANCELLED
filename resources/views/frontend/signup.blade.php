@extends('frontend.main_template.mainlogin')
@section('content')    
<div id="login-part" class="bg-white w-[40%] h-screen mx-auto">
    <div class="ml-[15%] mt-[18%]">
        <p class=" font-extrabold text-4xl">Sign Up</p>
        <p class=" font-normal ml-[0.6%] mt-1.5">Daftarkan Diri Anda Untuk Melanjutkan.</p>
    </div>
    <form action="" method="" class="flex flex-col mx-auto mt-6">
        @csrf
        <input type="text" placeholder="Nama" name="nama" class="bg-[#EFEFEF] w-[70%] py-3.5 text-sm mx-auto  pl-3.5 rounded-md">
        <input type="text" placeholder="Username" name="username" class="bg-[#EFEFEF] w-[70%] py-3.5 text-sm mx-auto pl-3.5 rounded-md mt-2">
        <input type="text" placeholder="Kelas" name="kelas" class="bg-[#EFEFEF] w-[70%] py-3.5 text-sm mx-auto pl-3.5 rounded-md mt-2">
        <input type="password" placeholder="Password" name="password" class="bg-[#EFEFEF] w-[70%] py-3.5 text-sm mx-auto mt-2 pl-3.5 rounded-md">
        <input type="password" placeholder="Konfirmasi Password" name="conf_password" class="bg-[#EFEFEF] w-[70%] py-3.5 text-sm mx-auto mt-2 pl-3.5 rounded-md">
        <input type="submit" value="Submit" class="cursor-pointer bg-[#629460] py-2.5 text-lg w-[70%] mx-auto mt-3 rounded-md font-medium text-white">
    </form>
   
    <p class="w-fit mt-5 ml-[13%] text-sm">Sudah Punya Akun? <a href="/login" class="underline">Login</a></p>
    <p class="w-fit mt-2 ml-[13%] text-sm">Kembali Ke <a href="/" class="underline">Home</a></p>

</div>
@endsection