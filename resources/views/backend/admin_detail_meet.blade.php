@extends('backend.main.admin')

@section('isi')
    <h1 class="text-xl font-bold ml-4">Detail Pertemuan</h1>
    <div class="w-[72vw] ml-4">
        <form action="{{ route('admin.update_pertemuan', $data->id) }}" method="POST">
            @csrf
            <div class="mb-5 mt-4">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                <input type="text" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required value="{{ $data->nama }}" readonly name="nama">
            </div>
            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas</label>
                <input type="text" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required value="{{ $data->kelas }}" readonly name="kelas">
            </div>
            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Guru</label>
                <input type="text" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required value="{{ $data->guru }}" readonly name="guru">
            </div>
            <div class="mb-5">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tindakan</label>
                <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="status">
                    <option value="Ditolak">Tolak</option>
                    <option value="Diterima">Terima</option>
                    <option value="Selesai">Selesai</option>
                </select>
            </div>

            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Pertemuan</label>
                <input type="date" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required name="tanggal">
            </div>

            <div class="mb-5">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Alasan Pertemuan</label>
                <textarea id="message" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="" name="alasan" readonly>{{ $data->alasan }}</textarea>
            </div>
            <div class="mb-5">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Tanggapan</label>
                <textarea id="message" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="" name="tanggapan"></textarea>
            </div>
          
            <div class="flex justify-end">
                <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
            </div>
        </form>
    </div>
@endsection
