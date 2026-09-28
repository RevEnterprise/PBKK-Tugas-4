@extends('layouts.app')

@section('content')

<main class="py-16 px-6">

    <div class="max-w-6xl mx-auto space-y-8">

        <div>

            <p class="text-emerald-500 font-bold
                      tracking-widest text-sm uppercase">
                Student Academic Profile
            </p>

            <h1 class="text-4xl lg:text-5xl font-extrabold mt-2">
                Profil Mahasiswa
            </h1>

            <p class="text-gray-500 mt-3">
                Informasi akademik mahasiswa Teknik Informatika ITS.
            </p>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <x-info-card
                label="Mahasiswa"
                :title="$student['name']"
                value="{{ $student['nrp'] }}"
                description="Program Studi {{ $student['program'] }}."
                :dark-mode="$darkMode"
            />

            <x-info-card
                label="Institusi"
                :title="$student['institution']"
                value="{{ $student['status'] }}"
                description="Tahun masuk {{ $student['year'] }}."
                :dark-mode="$darkMode"
            />

        </div>

        <div class="{{ $darkMode
            ? 'bg-gray-900 border-gray-800'
            : 'bg-white border-gray-200' }}
            border rounded-2xl p-6 shadow-lg">

            <div class="flex items-center justify-between
                        border-b
                        {{ $darkMode
                            ? 'border-gray-800'
                            : 'border-gray-200' }}
                        pb-4 mb-6">

                <h2 class="text-xl font-bold">
                    Informasi Akademik
                </h2>

                <span class="px-3 py-1 rounded-full
                             bg-emerald-500/10
                             border border-emerald-500/20
                             text-emerald-500 text-xs font-semibold">
                    Active Student
                </span>

            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                <div>
                    <p class="text-xs uppercase tracking-wider
                              text-gray-500 font-semibold">
                        Nama
                    </p>

                    <p class="mt-1">
                        {{ $student['name'] }}
                    </p>
                </div>

                <div>
                    <p class="text-xs uppercase tracking-wider
                              text-gray-500 font-semibold">
                        NRP
                    </p>

                    <p class="text-emerald-500 font-mono mt-1">
                        {{ $student['nrp'] }}
                    </p>
                </div>

                <div>
                    <p class="text-xs uppercase tracking-wider
                              text-gray-500 font-semibold">
                        Program Studi
                    </p>

                    <p class="mt-1">
                        {{ $student['program'] }}
                    </p>
                </div>

                <div>
                    <p class="text-xs uppercase tracking-wider
                              text-gray-500 font-semibold">
                        Institusi
                    </p>

                    <p class="mt-1">
                        {{ $student['institution'] }}
                    </p>
                </div>

                <div>
                    <p class="text-xs uppercase tracking-wider
                              text-gray-500 font-semibold">
                        Status
                    </p>

                    <p class="mt-1">
                        {{ $student['status'] }}
                    </p>
                </div>

                <div>
                    <p class="text-xs uppercase tracking-wider
                              text-gray-500 font-semibold">
                        Tahun Masuk
                    </p>

                    <p class="mt-1">
                        {{ $student['year'] }}
                    </p>
                </div>

            </div>

        </div>

        <div class="{{ $darkMode
            ? 'bg-gray-900 border-gray-800'
            : 'bg-white border-gray-200' }}
            border rounded-2xl p-6 shadow-lg">

            <h2 class="text-xl font-bold mb-5">
                Riwayat Studi
            </h2>

            <div class="space-y-5">

                <div class="flex gap-4">

                    <div class="w-2 rounded-full bg-emerald-500"></div>

                    <div>

                        <p class="font-semibold">
                            Teknik Informatika
                        </p>

                        <p class="text-sm text-gray-500 mt-1">
                            Institut Teknologi Sepuluh Nopember
                        </p>

                        <p class="text-sm text-gray-500 mt-2">
                            Program sarjana dengan fokus pada ilmu komputer,
                            pengembangan perangkat lunak, data, dan
                            kecerdasan buatan.
                        </p>

                    </div>

                </div>

                <div class="flex gap-4">

                    <div class="w-2 rounded-full bg-gray-500"></div>

                    <div>

                        <p class="font-semibold">
                            Madrasah Aliyah
                        </p>

                        <p class="text-sm text-gray-500 mt-1">
                            MAN Insan Cendekia
                        </p>

                        <p class="text-sm text-gray-500 mt-2">
                            Pendidikan menengah dengan penekanan pada
                            akademik, sains, dan pengembangan karakter.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</main>

@endsection