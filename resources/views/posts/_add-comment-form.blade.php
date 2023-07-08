@auth
    <x-panel>
        <form method="post" action="/posts/{{ $post->slug }}/comments">
            @csrf
            <header class="flex items-center">
                <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" width="40" height="40" class="rounded-full">
                <h2 class="ml-3">Want to Participate?</h2>

            </header>
            <div class="mt-6">
                <textarea name="body" id="" rows="5" class="w-full border border-gray-500 text-sm"
                    placeholder="You know you want to add something!" required></textarea>
                @error('body')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror


                <div class="flex justify-end mt-10">
                    <x-form.button>post</x-form.button>
                </div>
            </div>
        </form>
    </x-panel>
@else
    <p>
        <a href="/register">Register</a> or <a href="/login">Log in to leave a comment</a>
    </p>
@endauth
