@props(['name', 'type' => 'text'])
<div class="mb-6">
    <x-form.label name="{{ $name }}" />
    <input class="border border-gray-200 p-2 w-full rounded"
    name="{{ $name }}"
    id="{{ $name }}"
    type="{{ $type }}" 
    {{ $attributes(['value' => old($name)]) }}
>
<!-- Had to specify type, as it wasn't working correctly without it. -->

    <x-form.error name="{{ $name }}" />
</div>
