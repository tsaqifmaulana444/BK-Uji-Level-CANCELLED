@extends('frontend.main_template.main_d_u')
@section('isi')
    <main class="ml-60 max-h-screen overflow-auto">
        <div class="px-6 py-8">
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-3xl p-8 mb-5">
                    <h1 class="text-3xl font-bold mb-8">Daftar Pertemuan</h1>
                    @foreach ($datas as $data)
                        <div class="p-4 bg-white border rounded-xl text-gray-800 space-y-2 my-3">
                            <div class="flex justify-between">
                                <a href="{{ route('pertemuan.show', $data->id) }}" class="font-bold hover:text-yellow-800 hover:underline">{{ $data->alasan }}</a>
                                @if ($data->status == 'Menunggu')
                                    <div class="text-yellow-600 text-xs">{{ $data->status }}</div>
                                @endif 
                                @if ($data->status == 'Ditolak')
                                    <div class="text-red-600 text-xs">{{ $data->status }}</div>
                                @endif
                                @if ($data->status == 'Diterima')
                                    <div class="text-green-700 text-xs">{{ $data->status }}</div>
                                @endif
                                @if ($data->status == 'Selesai')
                                    <div class="text-blue-500 text-xs">{{ $data->status }}</div>
                                @endif
                            </div>
                            <div class="text-sm text-gray-600">
                                <p>{{ $data->nama }}, {{ $data->kelas }}</p>
                            </div>
                        </div>
                    @endforeach
                    {{ $datas->links() }}


                </div>
            </div>
        </div>
    </main>
    <script src="{{ asset('Assets/js/Noticme.min.js') }}"></script>
    
    
@endsection
