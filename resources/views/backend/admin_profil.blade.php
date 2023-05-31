@extends('backend.main.admin')

@section('isi')
    <h1 class="font-bold text-xl ml-4">Profil Lengkap {{ $user->name }}</h1>
    <div class="ml-4 mt-4">
        <form action="{{ route('user.update', Auth::user()->id) }}" method="post">
            @method('patch')
            @csrf

            <img class="w-32 h-32 mb-3 rounded-full shadow-lg" src='{{ asset("images/$user->image") }}'
                alt="{{ Auth::user()->name }} image" />

            <div class="flex mt-8">
                <div class="w-full mr-3 ">
                    <h1 class="text-base mb-1 font-bold">Nama Lengkap</h1>
                    <input type="text" id="small-input" value="{{ $user->name }}" name="name"
                        class="block w-[30vw] p-3 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 ">
                </div>
                <div class="w-full ">
                    <h1 class="text-base mb-1 font-bold">Email</h1>
                    <input type="text" id="small-input" value="{{ $user->kelas->nama }}" name="kelas_id"
                        class="block w-[30vw] p-3 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 ">
                    <input type="hidden" id="small-input" name="id" value="{{ $user->id }}">
                </div>
            </div>

            <div class="flex mt-4">
                <div class="w-full mr-3 ">
                    <h1 class="text-base mb-1 font-bold">Password</h1>
                    <input type="password" id="small-input" value="" name="password"
                        class="block w-[30vw] p-3 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 ">
                </div>
                <div class="w-full">
                    <h1 class="text-base mb-1 font-bold">Change Profile</h1>
                    <input type="file" id="small-input" name="gambar"
                        class="block w-[30vw] p-3 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 ">
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG
                        or GIF (MAX. 800x400px).</p>

                </div>
            </div>

            <div class="w-full flex justify-end ">
                <button type="submit"
                    class="focus:outline-none text-white bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm px-8 py-2 my-[4.2vh] mr-[7.1vw]">Edit
                    Profil</button>

            </div>

        </form>
    </div>
@endsection
