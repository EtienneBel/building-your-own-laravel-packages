# Laravel Livewire Button Component

A beautiful and customizable button component for Laravel Livewire applications.

## Installation

You can install the package via composer:

```bash
composer require your-vendor/livewire-buttons
```

## Usage

```php
<livewire:button 
    label="Click Me" 
    variant="primary"
    size="md"
    icon="fas fa-save"
/>
```

## Available Options

- `label` - Button text
- `variant` - primary, secondary, success, danger, warning
- `size` - sm, md, lg
- `icon` - Any Font Awesome icon class
- `loading` - Boolean for loading state
- `disabled` - Boolean for disabled state

## Testing

```bash
composer test
```

## Contributing

Please see [CONTRIBUTING.md](CONTRIBUTING.md) for details.

## Pprocess of creating and publishing the package to Packagist

1. Ensure your package has a `composer.json` file with the necessary metadata.
2. Push your code to GitHub if you haven't already.
3. Go to [Packagist](https://packagist.org/) and log in.
4. Click on "Submit" and provide the URL to your GitHub repository.
5. Click "Check" and then "Submit".

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.