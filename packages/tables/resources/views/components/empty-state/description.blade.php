<p {{ $attributes->class([
    'filament-tables-empty-state-description text-sm font-medium text-gray-500',
    'dark:text-gray-400' => config('tables.dark_mode'),
]) }}>
    {{ $slot }}
</p>
