<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    {{-- @dd($posts) --}}
    @foreach ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-gray-500 ">
            <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
                <h2 class="text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
            </a>
            <div class="text-base">
                By
                <a href="/authors/{{ $post->author->username }}"
                    class="hover:underline  text-blue-600">{{ $post->author->name }}</a>
                in <a href="/categories/{{ $post->category->slug }}"
                    class="hover:underline  text-blue-600">{{ $post->category->name }}</a> |
                {{ $post->updated_at->format('d M Y') }}
                <p class="my-4 font-light">
                    {{ Str::limit($post['body'], 100) }}
                </p>
            </div>
            <a href="/posts/{{ $post['slug'] }}" class="font-md text-blue-500 hover:underline">Read More &raquo;</a>
        </article>
    @endforeach


</x-layout>
