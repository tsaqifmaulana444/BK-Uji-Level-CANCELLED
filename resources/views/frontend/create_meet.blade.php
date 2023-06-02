@extends('frontend.main_template.main_d_u')
@section('isi')
    <main class="ml-60  max-h-screen overflow-auto">
        <div class="px-6 py-8">
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-3xl p-8 mb-5">
                    <h1 class="text-3xl font-bold mb-8">Buat Pertemuan</h1>

                    <form action="/pertemuan" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                            <input type="text" id="email" name="nama" value="{{ $data->name }}" readonly
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                 required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas</label>
                            <input type="text" id="email" name="kelas" value="{{ $data->kelas->nama }}" readonly
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Guru</label>
                            <input type="text" id="email" name="guru" 
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                required>
                        </div>
                        <div class="mb-4">

                            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alasan Pertemuan</label>
                            <textarea id="message" rows="4" name="alasan"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 
                                "></textarea>

                        </div>


                        <div class="flex justify-end">

                            <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </main>
@endsection
