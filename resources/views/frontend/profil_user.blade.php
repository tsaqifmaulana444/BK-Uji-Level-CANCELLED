@extends('frontend.main_template.main_d_u')
@section('isi')
    <main class="ml-60 max-h-screen overflow-auto">
        <div class="px-6 py-8">
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-3xl p-8 mb-5">
                    @if (Auth::check())
                        <h1 class="text-3xl font-bold mb-10">Profil Lengkap {{ Auth::user()->name }}</h1>
                    @endif
                    <form action="" method="post">


                        <img class="w-32 h-32 mb-3 rounded-full shadow-lg" src="{{ asset('images/$data["image"]') }}"
                            alt="{{ Auth::user()->name }} image" />

                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload
                            file</label>
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            aria-describedby="file_input_help" id="file_input" type="file">
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF
                            (MAX. 800x400px).</p>

                        <div class="flex">
                            <div class="w-full mr-3 ">
                                <h1 class="text-base">Nama Lengkap</h1>
                                <input type="text" id="small-input" value="{{ $data['name'] }}" name="name"
                                    class="block w-[27vw] p-3 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 ">
                            </div>
                            <div class="w-full ">
                                <h1 class="text-base">Kelas</h1>
                                <input type="text" id="small-input" value="{{ $data['kelas_id'] }}" name="kelas_id"
                                    class="block w-[27vw] p-3 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 ">
                                <input type="hidden" id="small-input" name="id" value="{{ $data['id'] }}">
                            </div>
                        </div>
                        <div class="flex">
                            <div class="w-full mr-3 ">
                                <h1 class="text-base">Guru BK</h1>
                                <input type="text" id="small-input"
                                    class="block w-[27vw] p-3 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 ">
                            </div>
                            <div class="w-full ">
                                <h1 class="text-base">Email</h1>
                                <input type="text" id="small-input" value="{{ $data['email'] }}" name="email"
                                    class="block w-[27vw] p-3 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 ">
                            </div>
                        </div>
                        <div class="flex">
                            <div class="w-full mr-3 ">
                                <h1 class="text-base">Password</h1>
                                <input type="password" id="small-input" value="{{ $data['password'] }}" name="password"
                                    class="block w-[27vw] p-3 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 ">
                            </div>
                            <div class="w-full flex justify-end">
                                <button type="submit"
                                    class="focus:outline-none text-white bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm px-8 py-2 my-[4.2vh] mr-[3vw]">Edit
                                    Profil</button>

                            </div>
                        </div>

                    </form>

                </div>
            </div>
    </main>
@endsection
