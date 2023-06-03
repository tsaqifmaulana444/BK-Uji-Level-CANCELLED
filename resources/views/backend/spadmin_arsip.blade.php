@extends('backend.main.super_admin')

@section('isi')
    <h1 class="text-xl ml-4 font-bold">
        Arsip Pertemuan
    </h1>
   
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 ml-4 mr-7 mt-[4vh]">
        @foreach ($datas as $data)
            <div class="w-[90%] h-20 cursor-pointer rounded-lg flex justify-between ml-[1vw] bg-[#ffffff] hover:bg-[#ececec] transition duration-300">
                    
                <div class="flex w-full my-auto h-fit">
                    <span class="material-symbols-outlined ml-5" style="font-size: 35px">
                        folder
                    </span>
                    <p class="ml-3 font-bold text-lg mt-1">Kelas {{ $data->nama }}</p>
                </div>
            </div>       
        @endforeach
    </div>
    {{ $datas->links() }}
@endsection

