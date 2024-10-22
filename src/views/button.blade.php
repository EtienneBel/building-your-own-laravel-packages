<button
    type="{{ $type }}"
    wire:loading.attr="disabled"
    @class([
        'inline-flex items-center justify-center rounded-md font-medium transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2',
        $getVariantClasses(),
        $getSizeClasses(),
        'opacity-50 cursor-not-allowed' => $disabled || $loading,
    ])
    {{ $attributes->merge(['wire:loading.class' => 'opacity-50']) }}>
    
    @if($loading)
        <svg class="animate-spin -ml-1 mr-3 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
        </svg>
        <span>{{ $loadingText }}</span>
    @else
        @if($icon)
            <i class="{{ $icon }} mr-2"></i>
        @endif
        <span>{{ $label }}</span>
    @endif
</button>