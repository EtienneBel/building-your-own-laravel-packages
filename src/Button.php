<?php

namespace Etiennebel\LivewireButtons;

use Livewire\Component;
use Illuminate\View\ComponentAttributeBag;

class Button extends Component
{
    public string $label = '';
    public string $type = 'button';
    public string $variant = 'primary';
    public string $size = 'md';
    public bool $loading = false;
    public bool $disabled = false;
    public string $loadingText = 'Loading...';
    public string $icon = '';
    public bool $outline = false;

    protected function getVariantClasses(): string
    {
        $variants = [
            'primary' => [
                'solid' => 'bg-blue-600 hover:bg-blue-700 text-white focus:ring-blue-500',
                'outline' => 'border-2 border-blue-600 text-blue-600 hover:bg-blue-50 focus:ring-blue-500'
            ],
            'secondary' => [
                'solid' => 'bg-gray-600 hover:bg-gray-700 text-white focus:ring-gray-500',
                'outline' => 'border-2 border-gray-600 text-gray-600 hover:bg-gray-50 focus:ring-gray-500'
            ],
            'success' => [
                'solid' => 'bg-green-600 hover:bg-green-700 text-white focus:ring-green-500',
                'outline' => 'border-2 border-green-600 text-green-600 hover:bg-green-50 focus:ring-green-500'
            ],
            'danger' => [
                'solid' => 'bg-red-600 hover:bg-red-700 text-white focus:ring-red-500',
                'outline' => 'border-2 border-red-600 text-red-600 hover:bg-red-50 focus:ring-red-500'
            ],
            'warning' => [
                'solid' => 'bg-yellow-500 hover:bg-yellow-600 text-white focus:ring-yellow-500',
                'outline' => 'border-2 border-yellow-500 text-yellow-600 hover:bg-yellow-50 focus:ring-yellow-500'
            ],
            'info' => [
                'solid' => 'bg-cyan-500 hover:bg-cyan-600 text-white focus:ring-cyan-500',
                'outline' => 'border-2 border-cyan-500 text-cyan-500 hover:bg-cyan-50 focus:ring-cyan-500'
            ],
            'light' => [
                'solid' => 'bg-gray-100 hover:bg-gray-200 text-gray-800 focus:ring-gray-200',
                'outline' => 'border-2 border-gray-200 text-gray-800 hover:bg-gray-50 focus:ring-gray-200'
            ],
            'dark' => [
                'solid' => 'bg-gray-800 hover:bg-gray-900 text-white focus:ring-gray-700',
                'outline' => 'border-2 border-gray-800 text-gray-800 hover:bg-gray-50 focus:ring-gray-700'
            ],
            'link' => [
                'solid' => 'text-blue-600 hover:text-blue-700 underline hover:bg-transparent',
                'outline' => 'text-blue-600 hover:text-blue-700 underline hover:bg-transparent'
            ]
        ];

        $style = $this->outline ? 'outline' : 'solid';
        return $variants[$this->variant][$style] ?? $variants['primary'][$style];
    }

    protected function getSizeClasses(): string
    {
        return match ($this->size) {
            'xs' => 'px-2 py-1 text-xs',
            'sm' => 'px-2.5 py-1.5 text-sm',
            'md' => 'px-4 py-2 text-sm',
            'lg' => 'px-6 py-3 text-base',
            'xl' => 'px-8 py-4 text-lg',
            default => 'px-4 py-2 text-sm',
        };
    }

    public function render()
    {
        $baseClasses = 'inline-flex items-center justify-center font-medium rounded-md transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 disabled:opacity-50 disabled:cursor-not-allowed';
        $classes = $baseClasses . ' ' . $this->getVariantClasses() . ' ' . $this->getSizeClasses();

        return view('livewire-buttons::button', [
            'classes' => $classes
        ]);
    }
}