@props([
    'form',
    'width' => 'sm',
    'indicatorsCount' => null,
])

<x-tables::dropdown
    {{ $attributes->class(['filament-tables-filters']) }}
    placement="bottom-end"
    shift
    width="xs"
    wire:key="{{ $this->id }}.table.filters"
>
    <x-slot name="trigger">
        <x-tables::filters.trigger :indicators-count="$indicatorsCount" />
    </x-slot>

    <x-tables::filters
        class="p-4"
        :form="$form"
    />
</x-tables::dropdown>
