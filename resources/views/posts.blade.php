<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    {{-- @dd($posts) --}}
    @foreach ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-gray-500 ">
            <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
                <h2 class="text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
            </a>
            <a href="">{{ $post['author'] }}</a> | 24 Sept 2024
            <div class="text-base text-gray-500">
                <p class="my-4 font-light">
                    {{ Str::limit($post['body'], 100) }}
                </p>
            </div>
            <a href="/posts/{{ $post['slug'] }}" class="font-md text-blue-500 hover:underline">Read More &raquo;</a>
        </article>
    @endforeach


</x-layout>
