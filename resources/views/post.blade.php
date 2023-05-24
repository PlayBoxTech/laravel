<x-layout>

    <x-slot name="content">
        <article>
            <h1> {{ $post->title }}</h1>
            <p>
                By <a href="#">Chris Moody</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </p>
            <div>
                {!! $post->body !!}
            </div>

        </article>
       

        <a href="/">Go Back</a>
    </x-slot>

    <x-slot name="title">
        {!! $post->title !!}
    </x-slot>
</x-layout>
