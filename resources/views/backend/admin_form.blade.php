@extends('backend.main.admin')

@section('isi')
    <h1 class="text-xl font-bold ml-4">Buat Pertemuan</h1>
    <div class="w-[72vw] ml-4">
        <form action="{{ route('admin.store_pertemuan') }}" method="POST">
            @csrf
            <div class="mb-5 mt-4">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas</label>
                <select id="countries" name="kelas"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    @foreach ($datas as $data)
                        <option value="{{ $data->nama }}">{{ $data->nama }}</option>
                    @endforeach
                    
                </select>
            </div>
            <div class="mb-5">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                <select id="countries" name="nama"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    @foreach ($datas2 as $data2)
                        <option value="{{ $data2->name }}">{{ $data2->name }}</option>
                    @endforeach
                </select>
            </div>



            <div class="mb-5">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Alasan Pertemuan</label>
                <textarea id="message" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="" name="alasan"></textarea>
            </div>
            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                    Pertemuan</label>
                <input type="date" id="email" name="tanggal"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="name@flowbite.com" required>
            </div>

            <div class="flex justify-end">
                <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
            </div>
        </form>
    </div>
@endsection
