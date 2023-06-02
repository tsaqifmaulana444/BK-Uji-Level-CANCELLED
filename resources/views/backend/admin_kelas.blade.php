@extends('backend.main.admin')

@section('isi')
    <div class="px-4 mb-6">
        <h1 class="font-bold text-xl">Kelas Asuhan {{ Auth::user()->name }}</h1>
        <p class="text-base">Kelola Kelas Anda</p>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4  ml-4 mr-7 mt-[4vh]">
        @foreach ($datas as $data)
            <div class="w-full p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 cursor-pointer">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Kelas {{ $data->nama }}</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">Wali Kelas : {{ $data->guru->name }}</p>
            </div>
        @endforeach

    </div>
    <div class="w-[20vw] mt-6 ml-4">
        {{ $datas->links() }}
    </div>
@endsection
