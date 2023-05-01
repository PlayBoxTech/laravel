<x-layout>
    <x-slot name="content">
        @foreach ($posts as $post )
            <article>
                <h1>
                    <a href="/posts/{{ $post->slug }}">
                        {!! $post->title !!}
                    </a>
                </h1>
                <div>
                     {{ $post->exceprt }}
                </div>
            </article>
            <hr/>
        @endforeach
    </x-slot>

    <x-slot name="title">
        Main Page
    </x-slot>
</x-layout>


