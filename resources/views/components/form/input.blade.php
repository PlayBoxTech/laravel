@props(['name', 'type' => 'text'])
<div class="mb-6">
    <x-form.label name="{{ $name }}" />
    <input class="border border-gray-200 p-2 w-full rounded" type="{{ $type }}" value="{{ old('$name') }}" name="{{ $name }}" id="{{ $name }}" required {{$attributes }}>

    <x-form.error name="{{ $name }}" />
</div>