@extends('layouts.app')

@section('content')

<main class="py-16 px-6">

    <div class="max-w-6xl mx-auto space-y-10">

        <x-status-banner
            :message="$statusMessage"
            :dark-mode="$darkMode"
        />

        <div class="grid grid-cols-1 lg:grid-cols-2
                    gap-12 items-center">

            <div class="space-y-6">

                <div class="text-emerald-500 font-bold
                            tracking-widest text-sm uppercase">
                    Institut Teknologi Sepuluh Nopember
                </div>

                <h1 class="text-4xl lg:text-6xl font-extrabold
                           tracking-tight">
                    Selamat Datang di
                    <span class="text-emerald-500">
                        Academic Profile
                    </span>
                </h1>

                <p class="text-gray-500 text-lg leading-relaxed">
                    Mini-website akademik mahasiswa Teknik Informatika
                    ITS yang memuat profil mahasiswa dan rancangan
                    platform Agentic AI.
                </p>

                <x-info-card
                    label="Profil Singkat"
                    title="Addien Zafriyan Al Akhsan"
                    value="5025241058"
                    description="Mahasiswa Teknik Informatika ITS yang memiliki ketertarikan pada pengembangan perangkat lunak, kecerdasan buatan, dan teknologi Agentic AI."
                    :dark-mode="$darkMode"
                />

                <div class="flex flex-col sm:flex-row gap-4">

                    <a href="{{ route('profile') }}"
                       class="px-6 py-3 bg-emerald-500
                              hover:bg-emerald-400
                              text-gray-950 rounded-lg
                              font-bold text-center transition">
                        Lihat Profil
                    </a>

                    <a href="{{ route('agent') }}"
                       class="{{ $darkMode
                           ? 'bg-gray-900 border-gray-700 text-white'
                           : 'bg-white border-gray-300 text-gray-900' }}
                           px-6 py-3 rounded-lg font-bold
                           text-center border transition
                           hover:border-emerald-500">
                        Ide Agentic AI
                    </a>

                </div>

            </div>

            <div class="{{ $darkMode
                ? 'bg-gray-900 border-gray-800'
                : 'bg-white border-gray-200' }}
                rounded-2xl border p-8 shadow-xl">

                <div class="border-b
                            {{ $darkMode
                                ? 'border-gray-800'
                                : 'border-gray-200' }}
                            pb-4 mb-6">

                    <span class="text-xs text-gray-500 font-mono">
                        academic.profile // active
                    </span>

                </div>

                <div class="font-mono text-sm space-y-4">

                    <p class="text-emerald-500">
                        &gt; loading student profile...
                    </p>

                    <p>
                        &gt; NRP: 5025241058
                    </p>

                    <p>
                        &gt; major: Informatics Engineering
                    </p>

                    <p>
                        &gt; institution: ITS
                    </p>

                    <p class="text-emerald-500">
                        &gt; system status: active
                    </p>

                </div>

            </div>

        </div>

    </div>

</main>

@endsection