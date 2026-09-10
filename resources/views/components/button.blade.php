{{-- resources/views/components/button.blade.php --}}
@props([
    'variant' => 'primary',
    'size' => 'md',
    'href' => null,
    'type' => 'button',
    'icon' => null,
    'full' => false,
    'loading' => false,
    'disabled' => false,
])

@php
    $variants = [
        'primary' => 'bg-gradient-to-r from-[#f6c951] to-yellow-400 hover:from-[#e5b83d] hover:to-yellow-300 text-[#062f47] shadow-lg hover:shadow-xl',
        'secondary' => 'bg-white/10 backdrop-blur-sm hover:bg-white/20 text-white border-2 border-white/20 hover:border-[#f6c951] shadow-md hover:shadow-lg',
        'dark' => 'bg-[#101820] hover:bg-[#1a2533] text-white border border-[#f6c951]/20 hover:border-[#f6c951]/50 shadow-md hover:shadow-lg',
        'success' => 'bg-gradient-to-r from-green-500 to-emerald-500 hover:from-green-600 hover:to-emerald-600 text-white shadow-md hover:shadow-lg',
        'danger' => 'bg-gradient-to-r from-red-500 to-rose-500 hover:from-red-600 hover:to-rose-600 text-white shadow-md hover:shadow-lg',
        'outline' => 'bg-transparent border-2 border-[#f6c951] text-[#f6c951] hover:bg-[#f6c951] hover:text-[#062f47] transition-all duration-300',
    ];

    $sizes = [
        'sm' => 'px-4 py-2 text-sm',
        'md' => 'px-6 py-3 text-base',
        'lg' => 'px-8 py-4 text-lg',
        'xl' => 'px-10 py-5 text-xl',
    ];

    $classes = [
        'btn',
        $variants[$variant] ?? 'btn-primary',
        $sizes[$size] ?? 'btn-md',
        $full ? 'btn-full' : '',
        $loading ? 'opacity-70 cursor-wait' : '',
        $disabled ? 'opacity-50 cursor-not-allowed' : '',
    ];

    $attributes = $attributes->merge([
        'class' => trim(implode(' ', $classes)),
    ]);

    if ($disabled) {
        $attributes = $attributes->merge([
            'disabled' => true,
            'aria-disabled' => 'true',
        ]);
    }
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes }} {{ $disabled ? 'tabindex="-1"' : '' }}>
        @if($loading)
            <svg class="animate-spin h-5 w-5" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
        @endif
        @if($icon && !$loading)
            <span class="text-xl">{{ $icon }}</span>
        @endif
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes }} {{ $disabled ? 'disabled' : '' }}>
        @if($loading)
            <svg class="animate-spin h-5 w-5" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
        @endif
        @if($icon && !$loading)
            <span class="text-xl">{{ $icon }}</span>
        @endif
        {{ $slot }}
    </button>
@endif