@extends('layouts.app')

@section('content')

<main class="flex-grow flex items-center justify-center
             px-6 py-20">

    <div class="text-center max-w-lg">

        <p class="text-emerald-500 font-mono text-sm mb-4">
            ERROR 404
        </p>

        <h1 class="text-7xl font-extrabold">
            404
        </h1>

        <h2 class="text-2xl font-bold mt-4">
            Halaman Tidak Ditemukan
        </h2>

        <p class="text-gray-500 mt-3 leading-relaxed">
            Halaman yang kamu cari tidak tersedia atau URL yang
            dimasukkan tidak sesuai dengan route yang tersedia.
        </p>

        <a href="{{ route('home') }}"
           class="inline-block mt-8 px-6 py-3
                  bg-emerald-500 hover:bg-emerald-400
                  text-gray-950 rounded-lg font-bold transition">
            ← Kembali ke Beranda
        </a>

    </div>

</main>

@endsection