@extends('backend.main.super_admin')

@section('isi')
    <div class="flex ml-4 justify-between">
        <h1 class="text-xl font-bold ">Detail Kelas {{ $kelas }}</h1>
        <a href="{{ route('spadmin.create_murid', [ $kelas, $id ]) }}">
            <button type="button" class="text-white bg-red-700 hover:bg-red-800 font-medium rounded-lg text-sm px-4 py-2 mr-[5.3vw]">Tambah Murid</button>
        </a>

    </div>
    <div class="flex flex-wrap ">
        <div class="w-full max-w-full px-3 mt-6 mb-6 md:mb-0 md:w-1/2 md:flex-none lg:w-2/3 lg:flex-none ml-1 ">
            <div
                class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border w-[70vw]">

                <div class="flex-auto p-6 px-0 pb-2 ">
                    <div class="overflow-x-auto">
                        <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                            <thead class="align-bottom">
                                <tr>
                                    <th
                                        class="px-6 py-3 pl-7 font-bold tracking-normal text-left uppercase align-middle bg-transparent  border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70 ">
                                        #</th>
                                    <th
                                        class="px-6 py-3 pl-2 font-bold tracking-normal text-left uppercase align-middle bg-transparent  border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70 ">
                                        Nama</th>
                                    <th
                                        class="px-6 py-3 pl-2 font-bold tracking-normal text-left uppercase align-middle bg-transparent  border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                        Email</th>
                                    <th
                                        class="px-6 py-3 pl-2 font-bold tracking-normal text-left uppercase align-middle bg-transparent  border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                        NIP</th>
                                    <th
                                        class="px-6 py-3 pl-2 font-bold tracking-normal text-left uppercase align-middle bg-transparent  border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                        Actions </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1
                                @endphp
                                @foreach ($datas as $data)
                                    <tr>
                                        <td
                                            class="p-2 text-sm leading-normal text-left align-middle bg-transparent border-b whitespace-nowrap pl-7">
                                            <span class="text-xs font-semibold leading-tight"> {{ $i++ }} </span>
                                        </td>
                                        <td
                                            class="p-2 text-sm leading-normal text-left align-middle bg-transparent border-b whitespace-nowrap">
                                            <span class="text-xs font-semibold leading-tight"> {{ $data->name }} </span>
                                        </td>
                                        <td
                                            class="p-2 text-sm leading-normal text-left align-middle bg-transparent border-b whitespace-nowrap">
                                            <span class="text-xs font-semibold leading-tight"> {{ $data->email }} </span>
                                        </td>
                                        <td
                                            class="p-2 text-sm leading-normal text-left align-middle bg-transparent border-b whitespace-nowrap">
                                            <span class="text-xs font-semibold leading-tight"> {{ $data->no_identitas }} </span>
                                        </td>
                                        <td
                                            class="p-2 text-sm leading-normal text-left align-middle bg-transparent border-b whitespace-nowrap flex">
                                            <form id="deleteForm{{ $data->id }}" action="/super_admin/murid/delete/{{ $data->id }}" method="POST">
                                                @csrf
                                                <button type="button" onclick="confirmDelete('{{ $data->id }}')"
                                                    class="text-white bg-red-700 hover:bg-red-800 font-medium rounded-lg text-sm px-1 py-1">
                                                    <span class="material-symbols-outlined mt-1 w-9">
                                                        delete
                                                    </span>
                                                </button>
                                            </form>
                                            <a href="">
                                                <button type="button" class=" text-white bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm px-1 py-1">
                                                    <span class="material-symbols-outlined mt-1 w-9">
                                                        edit
                                                    </span>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('Assets/js/Noticme.min.js') }}"></script>
    <script>
        function confirmDelete(userId) {
            Noticme.any({
                text: "Apakah Anda Ingin Menghapus Data {{ $data->name }}",
                type: "danger",
                color: "#FAB221",
                icon: "info",
                confirm: true,
                message: "Tindakan Tidak Bisa Diurungkan",
            }).then(response => {
                if (response) {
                    document.getElementById('deleteForm' + userId).submit();
                }
            });
        }
    </script>
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
