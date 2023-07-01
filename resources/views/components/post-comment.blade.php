@props(['comment'])
<x-panel>
    <article class="flex bg-gray-100">
        <div class="flex-shrink-0">
            <img src="https://i.pravatar.cc/60?u={{ $comment->id }}" width="60" height="60" alt=""
                class="rounded-xl">
        </div>
        <div>
            <header class="mb-4">
                <strong>{{ $comment->author->username }}</strong>
                <p class="text-xs">
                    Posted
                    <time>{{ $comment->created_at }}</time>
                </p>
            </header>
            <p>
                {{ $comment->body }}
            </p>
        </div>
    </article>
</x-panel>
