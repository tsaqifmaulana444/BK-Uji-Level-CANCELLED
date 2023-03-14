<nav class="flex bg-[#40513B] pb-2 pt-2 w-full h-[8vh]">
    <div id="logo" class="flex ml-[2.1vw] cursor-pointer">
        <img src="{{ asset('Assets/two-way-communication-removebg-preview.png') }}" alt="logoTb" srcset=""
            class="w-[35%]">
        <p class="text-[#ffffff] text-2xl font-extrabold my-1">KonsulYuk</p>
    </div>
    <div id="menu" class="ml-[24vw] flex text-[#ffffff] text-xs h-[100%] w-[32vw] justify-evenly font-bold	">
        <a href="{{ route('/') }}">
            <p class="my-3 hover:text-slate-400">Home</p>
        </a>
        <a href="{{ route('about_us') }}">
            <p class="my-3 hover:text-slate-400">Tentang Kami</p>
        </a>
        <a href="">
            <p class="my-3 hover:text-slate-400">Kontak</p>
        </a>
        <a href="{{ route('kritik_saran') }}">
            <p class="my-3 hover:text-slate-400">Kritik & Saran</p>
        </a>
    </div>
    <div id="login" class="ml-28">
        <a href="/login">
            <button type="button"
                class="text-white bg-transparent border hover:text-slate-400 hover:border-slate-400 font-medium rounded-[6px] text-xs px-5 h-[80%] my-1 ml-40 font-bold w-[40%]">Login</button>
        </a>
    </div>
</nav>