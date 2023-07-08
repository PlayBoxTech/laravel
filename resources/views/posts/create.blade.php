<x-layout>
    <section class="py-8 max-w-md mx-auto">
        <h1 class="text-lg font-bold mb-4">
            Publish New Post
        </h1>
        <x-panel>
            <form method="POST" action="/admin/posts" enctype="multipart/form-data">
                @csrf
                <x-form.input name="title" />
                <x-form.input name="slug" />
                <x-form.input name="thumbnail" type="file" />
               
                
                
                
                <x-form.textarea name="excerpt" />
                <x-form.textarea name="body" />
                <div class="mb-6">
                    <x-form.label name="category" />

                    <select name="category_id" class="w-full" id="category">
                        @php
                            $categories = \App\Models\Category::all();
                        @endphp

                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected': '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>

                   <x-form.error name="category" />
                </div>
                <x-form.button>Post</x-submit-button>
            </form>
        </x-panel>
    </section>

</x-layout>
