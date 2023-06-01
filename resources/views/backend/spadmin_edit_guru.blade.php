@extends('backend.main.super_admin')

@section('isi')
    <div class="ml-4 w-[72vw]">
        <h1 class="text-xl font-bold mb-6">Edit Akun {{ $data->name }}</h1>
        <form method="POST" action="{{ route('spadmin.update_guru', $data->id) }}">
            @csrf
            <!-- Tampilkan data yang diambil -->
            <div class="mb-3">
                <label for="name" class="block mb-3 text-sm font-medium text-gray-900">Nama</label>
                <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700" placeholder="nama" value="{{ $data->name }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="block mb-3 text-sm font-medium text-gray-900">Email</label>
                <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700" placeholder="email@gmail.com" value="{{ $data->email }}" required>
            </div>
            <div class="mb-3">
                <label for="no_identitas" class="block mb-3 text-sm font-medium text-gray-900">NIP</label>
                <input type="text" id="no_identitas" name="no_identitas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700" placeholder="0101312" value="{{ $data->no_identitas }}" required>
            </div>
            <!-- ... -->
            <div class="flex justify-end mt-2">
                <button type="submit" class="text-white bg-amber-500 hover:bg-amber-600 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
            </div>
        </form>
    </div>
@endsection
