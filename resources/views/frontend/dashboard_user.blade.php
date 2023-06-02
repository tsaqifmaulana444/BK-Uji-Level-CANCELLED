@extends('frontend.main_template.main_d_u')
@section('isi')
    <main class="ml-60 max-h-screen overflow-auto">
        <div class="px-6 py-8">
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-3xl p-8 mb-5">
                    @if (Auth::check())
                        <h1 class="text-3xl font-bold mb-10">Selamat Datang, {{ Auth::user()->name }}!</h1>
                    @endif

                    <div class="flex items-center justify-between">
                        <div class="flex items-stretch">
                            <div class="text-gray-400 text-xs">Partnership<br>With</div>
                            <div class="h-100 border-l mx-4"></div>
                            <div class="flex flex-nowrap -space-x-3">
                                <div class="h-9 w-9">
                                    <img class="object-cover w-full h-full rounded-full"
                                        src="https://ui-avatars.com/api/?background=random">
                                </div>
                                <div class="h-9 w-9">
                                    <img class="object-cover w-full h-full rounded-full"
                                        src="https://ui-avatars.com/api/?background=random">
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <hr class="my-10">

                    <div class="grid grid-cols-2 gap-x-20">
                        <div>
                            <h2 class="text-2xl font-bold mb-4">Dashboard</h2>

                            <div class="grid grid-cols-2 gap-4">
                                <div class="col-span-2">
                                    <div class="p-4 bg-green-100 rounded-xl">
                                        <div class="font-bold text-large text-gray-800 leading-none">Punya Masalah? <br>Atau Sekedar Ingin Berbincang?
                                        </div>
                                        <div class="mt-5">
                                            <a href="{{ route('pengguna.create', Auth::user()->id) }}">
                                              <button type="button" 
                                                  class="inline-flex items-center justify-center py-2 px-3 rounded-xl bg-white text-gray-800 hover:text-green-500 text-sm font-semibold transition">
                                                  Buat Pertemuan
                                              </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-span-2">
                                    <div class="p-4 bg-purple-100 rounded-xl text-gray-800">
                                        <div class="font-bold text-xl leading-none">Total Pertemuan Dibuat</div>
                                        <div class="mt-2">
                                          <p class="text-xl">
                                            {{ $datas['total'] }}
                                          </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            {{-- <h2 class="text-2xl font-bold mb-4">Your tasks today</h2> --}}

                            <div class="space-y-4 mt-12">
                                <div class="p-4 bg-white border rounded-xl text-gray-800 space-y-2">
                                    <div class="flex justify-between">
                                        <div class="text-gray-400 text-xs">Profil</div>
                                    </div>
                                    <a href="{{ route('user.edit', Auth::user()->id ) }}"
                                        class="font-bold hover:text-yellow-800 hover:underline">Klik Untuk Melihat Profil</a>
                                   
                                </div>
                 
                                <div class="p-4 bg-white border rounded-xl text-gray-800 space-y-2">
                                    <div class="flex justify-between">
                                        <div class="text-gray-400 text-xs">History</div>
                                    </div>
                                    @php
                                        $data = Auth::user()->name
                                    @endphp
                                    <a href="{{ route('pengguna.get_all', ['name' => $data ]) }}"
                                        class="font-bold hover:text-yellow-800 hover:underline">Lihat Semua Pertemuan
                                        </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="{{ asset('Assets/js/Noticme.min.js') }}"></script>
    <script>
      @if(isset($datas['successMessage']))
        Noticme.any({
            text: "{{ $datas['successMessage'] }}",
            timer: 5000,
            type: "success",
        });
      @endif
      @if (session('message'))
        Noticme.any({
            text: "{{ session('message') }}",
            timer: 5000,
            type: "success",
        });
      @endif
  </script>
@endsection