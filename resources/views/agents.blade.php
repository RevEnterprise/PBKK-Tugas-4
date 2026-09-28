@extends('layouts.app')

@section('content')

<main class="py-16 px-6">

    <div class="max-w-6xl mx-auto space-y-8">

        <div>

            <p class="text-emerald-500 font-bold
                      tracking-widest text-sm uppercase">
                Final Semester Project
            </p>

            <h1 class="text-4xl lg:text-5xl font-extrabold mt-2">
                MAGENTIC
            </h1>

            <p class="text-gray-500 mt-3 max-w-3xl">
                The Next Generation of Web-Based Development.
            </p>

            <p class="text-gray-500 mt-5 max-w-3xl leading-relaxed">
                A collaborative web-based development environment powered
                by Agentic AI seamlessly integrated with GitHub.
            </p>

        </div>

        @if(session('success'))

            <x-status-banner
                :message="session('success')"
                :dark-mode="$darkMode"
            />

        @endif

        <div class="{{ $darkMode
            ? 'bg-gray-900 border-gray-800'
            : 'bg-white border-gray-200' }}
            border rounded-2xl p-6 shadow-lg">

            <p class="text-xs uppercase tracking-wider
                      text-gray-500 font-semibold">
                Project Concept
            </p>

            <h2 class="text-2xl font-bold mt-2">
                {{ $tema }}
            </h2>

            <p class="text-gray-500 mt-4 leading-relaxed">
                A browser-based development environment that combines
                code editing, GitHub integration, real-time collaboration,
                and autonomous AI agents into a single, cohesive workspace.
            </p>

        </div>

        <div class="{{ $darkMode
            ? 'bg-gray-900 border-gray-800'
            : 'bg-white border-gray-200' }}
            border rounded-2xl p-6 shadow-lg">

            <p class="text-xs uppercase tracking-wider
                      text-gray-500 font-semibold">
                Platform
            </p>

            <h2 class="text-2xl font-bold mt-2">
                One Workspace for Every Workflow.
            </h2>

            <p class="text-gray-500 leading-relaxed mt-4">
                A browser-based development environment that combines
                code editing, GitHub integration, real-time collaboration,
                and autonomous AI agents into a single, cohesive workspace.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-6">

                <div class="p-5 rounded-xl
                            {{ $darkMode
                                ? 'bg-gray-950 border-gray-800'
                                : 'bg-gray-50 border-gray-200' }}
                            border">

                    <h3 class="font-bold text-lg">
                        Web-based IDE
                    </h3>

                    <p class="text-gray-500 text-sm leading-relaxed mt-2">
                        A familiar, fully-featured development environment
                        powered by Monaco Editor, delivered in-browser.
                    </p>

                </div>

                <div class="p-5 rounded-xl
                            {{ $darkMode
                                ? 'bg-gray-950 border-gray-800'
                                : 'bg-gray-50 border-gray-200' }}
                            border">

                    <h3 class="font-bold text-lg">
                        GitHub Integration
                    </h3>

                    <p class="text-gray-500 text-sm leading-relaxed mt-2">
                        Seamlessly connect projects with GitHub repositories
                        directly from the browser without local setups.
                    </p>

                </div>

                <div class="p-5 rounded-xl
                            {{ $darkMode
                                ? 'bg-gray-950 border-gray-800'
                                : 'bg-gray-50 border-gray-200' }}
                            border">

                    <h3 class="font-bold text-lg">
                        Real-Time Collaboration
                    </h3>

                    <p class="text-gray-500 text-sm leading-relaxed mt-2">
                        Work on the same codebase with teammates
                        simultaneously.
                    </p>

                </div>

                <div class="p-5 rounded-xl
                            {{ $darkMode
                                ? 'bg-gray-950 border-gray-800'
                                : 'bg-gray-50 border-gray-200' }}
                            border">

                    <h3 class="font-bold text-lg">
                        Agentic AI
                    </h3>

                    <p class="text-gray-500 text-sm leading-relaxed mt-2">
                        AI that can analyze the codebase, reason about
                        problems, and execute development tasks.
                    </p>

                </div>

            </div>

        </div>

        <div class="{{ $darkMode
            ? 'bg-gray-900 border-gray-800'
            : 'bg-white border-gray-200' }}
            border rounded-2xl p-6 shadow-lg">

            <p class="text-xs uppercase tracking-wider
                      text-gray-500 font-semibold">
                Key Features
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-5">

                <div class="p-5 rounded-xl
                            {{ $darkMode
                                ? 'bg-gray-950 border-gray-800'
                                : 'bg-gray-50 border-gray-200' }}
                            border">

                    <h3 class="font-bold text-lg">
                        Agentic AI
                    </h3>

                    <p class="text-gray-500 text-sm leading-relaxed mt-2">
                        AI that can analyze the codebase, reason about
                        problems, and execute development tasks.
                    </p>

                    <ul class="mt-4 space-y-2 text-sm text-emerald-500">
                        <li>▹ Analyze codebase context</li>
                        <li>▹ Detect bugs autonomously</li>
                        <li>▹ Execute development workflows</li>
                    </ul>

                </div>

                <div class="p-5 rounded-xl
                            {{ $darkMode
                                ? 'bg-gray-950 border-gray-800'
                                : 'bg-gray-50 border-gray-200' }}
                            border">

                    <h3 class="font-bold text-lg">
                        GitHub Integration
                    </h3>

                    <p class="text-gray-500 text-sm leading-relaxed mt-2">
                        Connect projects with GitHub repositories directly
                        from the browser.
                    </p>

                    <ul class="mt-4 space-y-2 text-sm text-blue-500">
                        <li>▹ Clone & Commit visually</li>
                        <li>▹ Branch management</li>
                        <li>▹ Pull request synchronization</li>
                    </ul>

                </div>

                <div class="p-5 rounded-xl
                            {{ $darkMode
                                ? 'bg-gray-950 border-gray-800'
                                : 'bg-gray-50 border-gray-200' }}
                            border">

                    <h3 class="font-bold text-lg">
                        Real-Time Collaboration
                    </h3>

                    <p class="text-gray-500 text-sm leading-relaxed mt-2">
                        Work on the same codebase with teammates
                        simultaneously.
                    </p>

                    <ul class="mt-4 space-y-2 text-sm text-amber-500">
                        <li>▹ Multiple users & cursors</li>
                        <li>▹ Real-time text broadcasting</li>
                        <li>▹ Live presence indicators</li>
                    </ul>

                </div>

                <div class="p-5 rounded-xl
                            {{ $darkMode
                                ? 'bg-gray-950 border-gray-800'
                                : 'bg-gray-50 border-gray-200' }}
                            border">

                    <h3 class="font-bold text-lg">
                        VS Code-like Environment
                    </h3>

                    <p class="text-gray-500 text-sm leading-relaxed mt-2">
                        A familiar development environment powered by
                        Monaco Editor and delivered in-browser.
                    </p>

                    <ul class="mt-4 space-y-2 text-sm text-purple-500">
                        <li>▹ File explorer & Tabs</li>
                        <li>▹ Advanced syntax highlighting</li>
                        <li>▹ Integrated web terminal</li>
                    </ul>

                </div>

            </div>

        </div>

        <div class="{{ $darkMode
            ? 'bg-gray-900 border-gray-800'
            : 'bg-white border-gray-200' }}
            border rounded-2xl p-6 shadow-lg">

            <div class="flex items-center gap-3 mb-5">

                <span class="relative flex h-3 w-3">

                    <span class="animate-ping absolute
                                 inline-flex h-full w-full
                                 rounded-full bg-emerald-400
                                 opacity-75">
                    </span>

                    <span class="relative inline-flex
                                 rounded-full h-3 w-3
                                 bg-emerald-500">
                    </span>

                </span>

                <h2 class="font-bold">
                    Agentic AI Workflow
                </h2>

            </div>

            <p class="text-gray-500 leading-relaxed">
                Unlike standard chat models, the Agentic AI executes
                a systematic loop: analyzes, forms a plan, executes
                changes, and verifies the result.
            </p>

            <div class="{{ $darkMode
                ? 'bg-gray-950 border-gray-800'
                : 'bg-gray-50 border-gray-200' }}
                border rounded-xl p-5 font-mono text-sm
                text-gray-500 space-y-3 mt-6">

                <p>
                    <span class="text-emerald-500">&gt;</span>
                    Analyze — Scanning AuthController.php...
                </p>

                <p>
                    <span class="text-emerald-500">&gt;</span>
                    Plan — Missing password hash verification step.
                </p>

                <p>
                    <span class="text-emerald-500">&gt;</span>
                    Execute — Patching line 45.
                </p>

                <p>
                    <span class="text-emerald-500">&gt;</span>
                    Verify — Running AuthTest... Passed.
                </p>

            </div>

        </div>

        <div class="{{ $darkMode
            ? 'bg-gray-900 border-gray-800'
            : 'bg-white border-gray-200' }}
            border rounded-2xl p-6 shadow-lg">

            <p class="text-xs uppercase tracking-wider
                      text-gray-500 font-semibold">
                Tech Stack
            </p>

            <div class="space-y-4 mt-5">

                <div class="p-5 rounded-xl
                            {{ $darkMode
                                ? 'bg-gray-950 border-gray-800'
                                : 'bg-gray-50 border-gray-200' }}
                            border">

                    <div class="text-xs text-gray-500 font-bold
                                uppercase tracking-widest">
                        Frontend
                    </div>

                    <div class="font-medium mt-2">
                        Monaco Editor, JS, Tailwind CSS
                    </div>

                </div>

                <div class="p-5 rounded-xl
                            {{ $darkMode
                                ? 'bg-gray-950 border-gray-800'
                                : 'bg-gray-50 border-gray-200' }}
                            border">

                    <div class="text-xs text-gray-500 font-bold
                                uppercase tracking-widest">
                        Backend
                    </div>

                    <div class="font-medium mt-2">
                        Laravel / PHP / MySQL
                    </div>

                </div>

                <div class="p-5 rounded-xl
                            {{ $darkMode
                                ? 'bg-gray-950 border-gray-800'
                                : 'bg-gray-50 border-gray-200' }}
                            border">

                    <div class="text-xs text-gray-500 font-bold
                                uppercase tracking-widest">
                        AI Core
                    </div>

                    <div class="font-medium mt-2">
                        Custom Agent Framework + LLM API
                    </div>

                </div>

                <div class="p-5 rounded-xl
                            {{ $darkMode
                                ? 'bg-gray-950 border-gray-800'
                                : 'bg-gray-50 border-gray-200' }}
                            border">

                    <div class="text-xs text-gray-500 font-bold
                                uppercase tracking-widest">
                        Integration
                    </div>

                    <div class="font-medium mt-2">
                        GitHub REST & GraphQL API
                    </div>

                </div>

            </div>

        </div>

        {{-- Form pengumpulan ide --}}

        <div class="{{ $darkMode
            ? 'bg-gray-900 border-gray-800'
            : 'bg-white border-gray-200' }}
            border rounded-2xl p-6 shadow-lg">

            <p class="text-xs uppercase tracking-wider
                      text-gray-500 font-semibold">
                Submit Your Idea
            </p>

            <h2 class="text-2xl font-bold mt-2">
                Form Pengumpulan Ide
            </h2>

            <p class="text-gray-500 mt-3">
                Masukkan ide atau pengembangan yang ingin ditambahkan
                ke dalam platform Agentic AI.
            </p>

            @if($errors->any())

                <div class="mt-5 bg-red-500/10 border
                            border-red-500/30 rounded-xl p-4
                            text-red-500">

                    <ul class="list-disc list-inside space-y-1">

                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach

                    </ul>

                </div>

            @endif

            <form action="{{ route('agent.submit') }}"
                  method="POST"
                  class="mt-6 space-y-5">

                @csrf

                <div>

                    <label for="name"
                           class="block text-sm font-semibold mb-2">
                        Nama
                    </label>

                    <input type="text"
                           id="name"
                           name="name"
                           value="{{ old('name') }}"
                           class="w-full rounded-lg border
                                  {{ $darkMode
                                      ? 'bg-gray-950 border-gray-700 text-white'
                                      : 'bg-gray-50 border-gray-300 text-gray-900' }}
                                  px-4 py-3
                                  focus:outline-none
                                  focus:ring-2
                                  focus:ring-emerald-500"
                           placeholder="Masukkan nama"
                           required>

                </div>

                <div>

                    <label for="idea"
                           class="block text-sm font-semibold mb-2">
                        Ide
                    </label>

                    <textarea id="idea"
                              name="idea"
                              rows="5"
                              class="w-full rounded-lg border
                                     {{ $darkMode
                                         ? 'bg-gray-950 border-gray-700 text-white'
                                         : 'bg-gray-50 border-gray-300 text-gray-900' }}
                                     px-4 py-3
                                     focus:outline-none
                                     focus:ring-2
                                     focus:ring-emerald-500"
                              placeholder="Tuliskan ide Anda..."
                              required>{{ old('idea') }}</textarea>

                </div>

                <button type="submit"
                        class="px-6 py-3 bg-emerald-500
                               hover:bg-emerald-400
                               text-gray-950 rounded-lg
                               font-bold transition">
                    Kirim Ide
                </button>

            </form>

        </div>

        <div class="flex flex-col sm:flex-row gap-4">

            <a href="{{ route('home') }}"
               class="px-6 py-3 rounded-lg font-semibold
                      text-center border
                      {{ $darkMode
                          ? 'bg-gray-900 border-gray-700'
                          : 'bg-white border-gray-300' }}
                      hover:border-emerald-500 transition">
                ← Kembali ke Beranda
            </a>

            <a href="{{ route('profile') }}"
               class="px-6 py-3 bg-emerald-500
                      hover:bg-emerald-400
                      text-gray-950 rounded-lg font-bold
                      text-center transition">
                Lihat Profil Mahasiswa →
            </a>

        </div>

    </div>

</main>

@endsection