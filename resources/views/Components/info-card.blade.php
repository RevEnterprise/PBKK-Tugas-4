<div class="{{ ($darkMode ?? false)
    ? 'bg-gray-900 border-gray-800'
    : 'bg-white border-gray-200' }}
    border rounded-2xl p-6 shadow-lg">

    <p class="text-xs uppercase tracking-wider
              text-gray-500 font-semibold">
        {{ $label }}
    </p>

    <h3 class="text-xl font-bold mt-2">
        {{ $title }}
    </h3>

    <p class="text-emerald-500 font-mono mt-1">
        {{ $value }}
    </p>

    @if($description)
        <p class="text-gray-500 mt-3 leading-relaxed">
            {{ $description }}
        </p>
    @endif

</div>