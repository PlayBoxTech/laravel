@props(['name'])

<div class="mb-6">
    <x-form.label name="{{ $name }}" />
    <select name="category_id" class="w-full" id="category">
        @php
            $categories = \App\Models\Category::all();
        @endphp

        @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected': '' }}>{{ $category->name }}</option>
        @endforeach
    </select>

    <x-form.error name="{{ $name }}" />
</div>