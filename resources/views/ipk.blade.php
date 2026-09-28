@extends('layouts.app')

@section('content')

<main class="max-w-4xl mx-auto px-6 py-16">

    <div class="text-center mb-10">

        <p class="text-emerald-500 font-mono text-sm mb-3">
            ACADEMIC CALCULATOR
        </p>

        <h1 class="text-4xl font-extrabold">
            Kalkulator IPK
        </h1>

        <p class="text-gray-500 mt-3">
            Menghitung jumlah dan rata-rata IP dari dua semester.
        </p>

    </div>

    <div class="bg-white dark:bg-gray-900
                border border-gray-200 dark:border-gray-800
                rounded-2xl p-8 shadow-xl">

        <div class="grid md:grid-cols-2 gap-6">

            <div class="bg-gray-50 dark:bg-gray-950
                        border border-gray-200 dark:border-gray-800
                        rounded-xl p-6">

                <p class="text-gray-500 text-sm">
                    IP Semester 1
                </p>

                <p class="text-3xl font-bold text-emerald-500 mt-2">
                    {{ number_format((float) $ip1, 2) }}
                </p>

            </div>

            <div class="bg-gray-50 dark:bg-gray-950
                        border border-gray-200 dark:border-gray-800
                        rounded-xl p-6">

                <p class="text-gray-500 text-sm">
                    IP Semester 2
                </p>

                <p class="text-3xl font-bold text-emerald-500 mt-2">
                    {{ number_format((float) $ip2, 2) }}
                </p>

            </div>

        </div>

        <div class="border-t border-gray-200
                    dark:border-gray-800 my-8">
        </div>

        <div class="bg-emerald-500/10
                    border border-emerald-500/30
                    rounded-xl p-6">

            <div class="flex justify-between items-center">

                <span class="text-gray-500">
                    Rata-rata IPK
                </span>

                <span class="text-3xl font-extrabold">
                    {{ number_format((float) $rataRata, 2) }}
                </span>

            </div>

        </div>

        <div class="mt-8 flex gap-4">

            <a href="{{ route('home') }}"
               class="px-5 py-3 bg-gray-200
                      hover:bg-gray-300
                      dark:bg-gray-800 dark:hover:bg-gray-700
                      rounded-lg font-semibold transition">
                ← Beranda
            </a>

            <a href="{{ route('agent') }}"
               class="px-5 py-3 bg-emerald-500
                      hover:bg-emerald-400
                      text-gray-950 rounded-lg
                      font-semibold transition">
                Agentic AI →
            </a>

        </div>

    </div>

</main>

@endsection