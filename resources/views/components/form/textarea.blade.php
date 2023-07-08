@props(['name'])
<div class="mb-6">
    <x-form.label name="{{ $name }}" />
    <textarea class="block mb-2  font-bold text-xs text-gray-700 border border-black-1000 w-full" name="{{ $name }}"  rows=5 id="$name" required>{{ old($name)}} </textarea>
    <x-form.error name= {{ $name }} />
</div>