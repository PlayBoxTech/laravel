<x-layout>
    <section class="py-8 max-w-md mx-auto">
        <h1 class="text-lg font-bold mb-4">
            Publish New Post
        </h1>
        <x-panel>
            <form method="POST" action="/admin/posts" enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="title">
                        Title
                    </label>
                    <input class="border border-gray-400 p-2 w-full" type="text" value="{{ old('title') }}" name="title" id="title" required>

                    @error('title')
                        <p class="text-red-500 text-xs mt-2"> {{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="slug">
                        Slug
                    </label>
                    <input class="border border-gray-400 p-2 w-full" type="text" value="{{ old('slug') }}" name="slug" id="slug" required>
                    @error('slug')
                        <p class="text-red-500 text-xs mt-2"> {{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="thumbnail">
                        Thumbnail
                    </label>
                    <input class="border border-gray-400 p-2 w-full" type="file" name="thumbnail" id="thumbnail" required>
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="excerpt">
                        Excerpt
                    </label>
                    <textarea class="block mb-2  font-bold text-xs text-gray-700 border w-full border-black-500"  name="excerpt" id="excerpt" required>{{ old('excerpt')}} </textarea>

                    @error('excerpt')
                        <p class="text-red-500 text-xs mt-2"> {{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="body">
                        Body
                    </label>
                    <textarea class="block mb-2  font-bold text-xs text-gray-700 border border-black-1000 w-full" name="body"  rows=5 id="body" required>{{ old('body')}} </textarea>
                    @error('body')
                        <p class="text-red-500 text-xs mt-2"> {{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="category">
                        Category
                    </label>
                    <select name="category_id" class="w-full" id="category">
                        @php
                            $categories = \App\Models\Category::all();
                        @endphp

                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected': '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>

                    @error('category')
                        <p class="text-red-500 text-xs mt-2"> {{ $message }}</p>
                    @enderror
                </div>
                <x-submit-button>Post</x-submit-button>
            </form>
        </x-panel>
    </section>

</x-layout>
