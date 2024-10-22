<?php

namespace EtienneBel\LivewireButtons;

use Livewire\Component;

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

    public function getVariantClasses(): string
    {
        return match ($this->variant) {
            'primary' => 'bg-blue-600 hover:bg-blue-700 text-white',
            'secondary' => 'bg-gray-600 hover:bg-gray-700 text-white',
            'success' => 'bg-green-600 hover:bg-green-700 text-white',
            'danger' => 'bg-red-600 hover:bg-red-700 text-white',
            'warning' => 'bg-yellow-600 hover:bg-yellow-700 text-white',
            default => 'bg-blue-600 hover:bg-blue-700 text-white',
        };
    }

    public function getSizeClasses(): string
    {
        return match ($this->size) {
            'sm' => 'px-2 py-1 text-sm',
            'md' => 'px-4 py-2',
            'lg' => 'px-6 py-3 text-lg',
            default => 'px-4 py-2',
        };
    }

    public function render()
    {
        return view('livewire-buttons::button', [
            'variantClasses' => $this->getVariantClasses(),
            'sizeClasses' => $this->getSizeClasses()
        ]);
    }
}
