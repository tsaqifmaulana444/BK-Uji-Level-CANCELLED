@extends('backend.main.admin')

@section('isi')
    @foreach ($datas as $data)
        <div class="p-4 bg-white border rounded-xl text-gray-800 space-y-2 my-3">
            <div class="flex justify-between">
                <a href="{{ route('admin.detail_meet', $data->id) }}"
                    class="font-bold hover:text-yellow-800 hover:underline">{{ $data->alasan }}</a>
                @if ($data->status == 'Menunggu')
                    <div class="text-yellow-600 text-xs">{{ $data->status }}</div>
                @endif
                @if ($data->status == 'Ditolak')
                    <div class="text-red-600 text-xs">{{ $data->status }}</div>
                @endif
                @if ($data->status == 'Diterima')
                    <div class="text-green-700 text-xs">{{ $data->status }}</div>
                @endif
                @if ($data->status == 'Panggilan')
                    <div class="text-lime-600 text-xs">{{ $data->status }}</div>
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
@endsection
