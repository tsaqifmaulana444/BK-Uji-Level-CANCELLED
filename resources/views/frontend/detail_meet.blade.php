@extends('frontend.main_template.main_d_u')
@section('isi')
@php
    $name = Auth::user()->name
@endphp
    <main class="ml-60 max-h-screen overflow-auto">
        <div class="px-6 py-8">
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-3xl p-8 mb-5">
                    <div class="w-full flex justify-between">
                        <h1 class="text-3xl font-bold mb-10">Detail Pertemuan</h1>
                        @if ($data->status == 'Menunggu')
                            <p class="text-yellow-600 text-lg mt-[1.4vh] mr-4">{{ $data->status }}</p>
                        @endif
                        @if ($data->status == 'Ditolak')
                            <p class="text-red-600 text-lg mt-[1.4vh] mr-4">{{ $data->status }}</p>
                        @endif
                        @if ($data->status == 'Diterima')
                            <p class="text-green-700 text-lg mt-[1.4vh] mr-4">{{ $data->status }}</p>
                        @endif
                        @if ($data->status == 'Selesai')
                        <p class="text-blue-500 text-lg mt-[1.4vh] mr-4">{{ $data->status }}</p>
                        @endif
                        
                    </div>
                    <div class="w-full">
                        <h1 class="text-base">Nama Lengkap</h1>
                        <h1 class="text-sm">{{ $data->nama }}</h1>
                    </div>
                    <div class="w-full mt-4">
                        <h1 class="text-base">Kelas</h1>
                        <h1 class="text-sm">{{ $data->kelas }}</h1>
                    </div>
                    <div class="w-full mt-4">
                        <h1 class="text-base">Guru Bk</h1>
                        <h1 class="text-sm">{{ $data->guru }}</h1>
                    </div>
                    <div class="w-full mt-4">
                        <h1 class="text-base">Alasan Pertemuan</h1>
                        <textarea name="" id="" cols="81" rows="4" class="bg-gray-200 rounded-md p-3" disabled>{{ $data->alasan }}</textarea>
                    </div>
                    <div id="diterima" style="display: none">
                        <div class="w-full mt-4">
                            <h1 class="text-base">Tanggapan Guru</h1>
                            <textarea name="" id="" cols="81" rows="4" class="bg-gray-200 rounded-md p-3" disabled>{{ $data->tanggapan }}</textarea>
                        </div>
                        <div class="w-full mt-4">
                            <h1 class="text-base">Tanggal Pertemuan</h1>
                            <h1 class="text-sm">{{ $data->tanggal }}</h1>
                        </div>
                    </div>
                    <div id="ditolak" style="display: none">
                        <div class="w-full mt-4">
                            <h1 class="text-base">Tanggapan Guru</h1>
                            <textarea name="" id="" cols="81" rows="4" class="bg-gray-200 rounded-md p-3" disabled>{{ $data->tanggapan }}</textarea>
                        </div>
                        
                    </div>
                    <div class="flex mt-4">
                        
                        <div class="w-full flex justify-end">
                            <a href="{{ route('pengguna.get_all', ['name' => $name]) }}">
                                <button type="button"
                                    class="focus:outline-none text-white bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm px-8 py-2">Kembali</button>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        let accepted = document.getElementById('diterima')
        let rejected = document.getElementById('ditolak')
        @if ( $data->status == "Diterima" )
            accepted.style.display = 'block'
        @endif
        @if ( $data->status == "Selesai" )
            accepted.style.display = 'block'
        @endif
        @if ($data->status == "Ditolak") 
            rejected.style.display = 'block'
        @endif

    </script>
@endsection
