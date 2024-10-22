<button
    type="{{ $type }}"
    class="px-4 py-2 font-semibold rounded-lg
        @if($style === 'primary') bg-blue-500 hover:bg-blue-700 text-white @endif
        @if($style === 'secondary') bg-gray-500 hover:bg-gray-700 text-white @endif
        @if($style === 'success') bg-green-500 hover:bg-green-700 text-white @endif
        @if($style === 'danger') bg-red-500 hover:bg-red-700 text-white @endif
        @if($style === 'warning') bg-yellow-500 hover:bg-yellow-700 text-black @endif
        @if($style === 'info') bg-blue-300 hover:bg-blue-500 text-white @endif
        @if($style === 'light') bg-gray-100 hover:bg-gray-300 text-black @endif
        @if($style === 'dark') bg-gray-800 hover:bg-gray-900 text-white @endif
        {{ $additionalClasses }}"
>
    {{ $text }}
</button>
