@extends('frontend.main_template.main_d_u')
@section('isi')
    
  <main class="ml-60 max-h-screen overflow-auto">
    <div class="px-6 py-8">
      <div class="max-w-4xl mx-auto">
        <div class="bg-white rounded-3xl p-8 mb-5">
          @if(Auth::check())
            <h1 class="text-3xl font-bold mb-10">Selamat Datang, {{ Auth::user()->name }}!</h1>
          @endif

          
        </div>
      </div>
    </div>
  </main>
@endsection