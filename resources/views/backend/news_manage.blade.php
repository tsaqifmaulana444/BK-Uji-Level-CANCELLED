@extends('backend.main.admin')
@section('isi')
    <!-- strat content -->
    <div class="bg-gray-100 flex-1 p-6 md:mt-16">


        <button type="button"
            class="text-white bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm px-8 py-3 mb-4">Add
            News</button>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>

                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Judul Berita
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Isi Berita
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Penulis
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Dibuat
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $data)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">
                                {{ $loop->iteration }}
                            </td>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $data->judul }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $data->paragraf }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->penulis }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->created_at->diffForHumans() }}
                            </td>
                            
                            <td class="px-6 py-4 text-right">
                                <a href="#"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                <span>|</span>
                                <a href="{{ route('delete_news', ['id'=> $data->id]) }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endsection
