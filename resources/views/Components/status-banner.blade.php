<div class="{{ ($darkMode ?? false)
    ? 'bg-emerald-500/10 border-emerald-500/30 text-emerald-300'
    : 'bg-emerald-50 border-emerald-200 text-emerald-700' }}
    border rounded-xl p-4">

    <div class="flex items-center gap-3">

        <span class="relative flex h-3 w-3">
            <span class="animate-ping absolute
                         inline-flex h-full w-full
                         rounded-full bg-emerald-400
                         opacity-75"></span>

            <span class="relative inline-flex
                         rounded-full h-3 w-3
                         bg-emerald-500"></span>
        </span>

        <p class="font-semibold">
            {{ $message }}
        </p>

    </div>

</div>