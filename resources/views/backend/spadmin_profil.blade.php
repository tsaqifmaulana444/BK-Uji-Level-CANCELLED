@extends('backend.main.super_admin')

@section('isi')
    <h1 class="font-bold text-xl ml-4">Profil Lengkap {{ $user->name }}</h1>
    <div class="ml-4 mt-4">
        <form action="{{ route('spadmin.update_profil', $user->id) }}" method="post" enctype="multipart/form-data">
            @csrf

            <img class="w-32 h-32 mb-3 rounded-full shadow-lg" src='{{ asset("images/$user->image") }}'
                alt="{{ $user->name }} image" />

            <div class="flex mt-8">
                <div class="w-full mr-3">
                    <h1 class="text-base mb-1 font-bold">Nama Lengkap</h1>
                    <input type="text" id="small-input" value="{{ $user->name }}" name="name"
                        class="block w-[30vw] p-3 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500">
                </div>
                
                <div class="w-full">
                    <h1 class="text-base mb-1 font-bold">Email</h1>
                    <input type="email" id="small-input" value="{{ $user->email }}" name="email"
                        class="block w-[30vw] p-3 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500">
                </div>
            </div>

            <div class="flex mt-4">
                <div class="w-full mr-3">
                    <h1 class="text-base mb-1 font-bold">Password</h1>
                    <input type="password" id="small-input" value="" name="password"
                        class="block w-[30vw] p-3 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500">
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300 capitalize" id="file_input_help">Masukkan password lama (jika tidak ingin mengganti)</p>
                </div>
                <div class="w-full">
                    <h1 class="text-base mb-1 font-bold">Change Profile</h1>
                    <input type="file" id="small-input" name="image"
                        class="block w-[30vw] p-3 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500">
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, or JPG</p>
                </div>
            </div>

            <div class="w-full flex">
                <div class="w-full">
                    <h1 class="text-base mb-1 font-bold">NIP</h1>
                    <input type="text" id="small-input" value="{{ $user->no_identitas }}" name="no_identitas"
                        class="block w-[30vw] p-3 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div class="w-full flex justify-end">
                    <button type="submit"
                        class="focus:outline-none text-white bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm px-8 py-2 my-[4.2vh] mr-[7.1vw]">Edit
                        Profil</button>
                </div>
            </div>
        </form>
    </div>
@endsection
