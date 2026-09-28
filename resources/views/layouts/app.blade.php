<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        {{ $title ?? 'Academic Profile - ITS' }}
    </title>

    @vite(['resources/css/app.css'])
</head>

<body class="{{ ($darkMode ?? false)
    ? 'bg-gray-950 text-gray-100'
    : 'bg-gray-100 text-gray-900' }}
    font-sans min-h-screen flex flex-col">

    <nav class="{{ ($darkMode ?? false)
        ? 'bg-gray-900 border-gray-800'
        : 'bg-white border-gray-200' }}
        border-b sticky top-0 z-50 shadow-lg">

        <div class="max-w-6xl mx-auto px-6 py-4
                    flex flex-col sm:flex-row
                    items-center justify-between gap-4">

            <a href="{{ route('home') }}"
               class="text-xl font-bold text-emerald-500">
                ITS Academic Profile
            </a>

            <div class="flex flex-wrap justify-center gap-5 text-sm font-semibold">

                <a href="{{ route('home') }}"
                   class="hover:text-emerald-500 transition">
                    Beranda
                </a>

                <a href="{{ route('profile') }}"
                   class="hover:text-emerald-500 transition">
                    Profil Mahasiswa
                </a>

                <a href="{{ route('agent') }}"
                   class="hover:text-emerald-500 transition">
                    Ide Agentic AI
                </a>

                <a href="{{ route('hitung.ipk', ['ip1' => 0, 'ip2' => 0]) }}"
                   class="hover:text-emerald-500 transition">
                    Hitung IPK
                </a>

            </div>
        </div>
    </nav>

    <main class="flex-grow">
        @yield('content')
    </main>

    <footer class="{{ ($darkMode ?? false)
        ? 'bg-gray-950 border-gray-800 text-gray-500'
        : 'bg-white border-gray-200 text-gray-500' }}
        border-t p-8 text-center text-sm">

        <p>
            ITS Academic Profile &copy; 2026
        </p>

        <p class="mt-1">
            Institut Teknologi Sepuluh Nopember
        </p>

    </footer>

</body>
</html>