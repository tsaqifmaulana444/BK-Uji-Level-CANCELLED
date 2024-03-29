@extends('backend.main.super_admin')

@section('isi')
    <div class="flex justify-between mb-3">
        <h1 class="text-xl font-bold ml-4 mt-4">Halaman Koordinasi Kelas</h1>
        <form action="{{ route('spadmin.add_kelas') }}" method="post" class="flex mr-7">
            @csrf
            <input type="text" name="nama" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-l-lg focus:ring-blue-500 focus:border-blue-500 block w-full px-3" placeholder="Tambahkan Kelas Baru" required>
            <button type="submit" class="focus:outline-none text-white bg-amber-400 hover:bg-amber-500 font-medium rounded-r-lg text-sm px-5 ">
                <span class="material-symbols-outlined mt-1">send</span>
            </button>


        </form>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4  ml-4 mr-7 mt-[4vh]">
        @foreach ($datas as $data)
                <div class="w-full p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 cursor-pointer">
                    <div class="flex justify-between">
                        <a href="{{ route('spadmin.detail_kelas', [$data->nama, $data->id]) }}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Kelas {{ $data->nama }}</h5>
                        </a>
                        <form action="{{ route('spadmin.destroy_kelas', $data->id ) }}" method="POST">
                            @csrf
                            <button type="submit" class="bg-transparent">
                                <span class="material-symbols-outlined ">
                                    delete_sweep
                                    </span>
                            </button>
                        </form>
                    </div>
                    <p class="font-normalTotal Murid : 20 text-gray-700 dark:text-gray-400">Wali Kelas : {{ $data->guru->name }}</p>
                </div>
        @endforeach
        
    </div>
    <div class="w-[20vw] mt-6 ml-4 mb-8">
        {{ $datas->links() }}
    </div>
    <script src="{{ asset('Assets/js/Noticme.min.js') }}"></script>
    <script>
        @if (session('message'))
            Noticme.any({
                text: "{{ session('message') }}",
                timer: 5000,
                type: "success",
            });
        @endif
    </script>
    
@endsection
