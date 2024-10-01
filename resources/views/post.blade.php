<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    {{-- @dd($posts) --}}
    <article class="py-8 max-w-screen-md ">
        <h2 class="text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
        <div class="text-base text-gray-500">
            <a href="/authors/{{ $post->author->id }}" class="hover:underline">{{ $post->author->name }}</a> |
            {{ $post->updated_at->format('d M Y') }}
            <p class="my-4 font-light">
                {{ $post['body'] }}
            </p>
        </div>
        <a href="/posts" class="font-md text-blue-500 hover:underline">&laquo; Back To Posts</a>
    </article>
</x-layout>
