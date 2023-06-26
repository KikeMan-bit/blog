<x-app-layout>
    <section class=text-gray-800">
        <div class="container max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12">
            @foreach ($posts as $post)
                @if ($loop->first)
                    <div rel="noopener noreferrer" href="{{ Route('posts.show', $post) }}"
                        class="block max-w-sm gap-3 mx-auto sm:max-w-full group hover:no-underline focus:no-underline lg:grid lg:grid-cols-12 bg-gray-50">
                        <img src="@if ($post->image) {{ Storage::url($post->image->url) }}@else https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_960_720.jpg @endif"
                            alt="" class="object-cover w-full h-64 sm:h-96 lg:col-span-7  bg-gray-500">

                        <div class="p-6 space-y-2 lg:col-span-5">
                            <div class="mb-2">
                                @foreach ($post->tags as $tag)
                                    {{-- <span class=" {{ 'bg-' . $tag->color . '-600' }} text-white rounded-sm">
                                        {{ $tag->name }}
                                    </span> --}}
                                    <a href="{{ route('posts.tag', $tag) }}"
                                        class="bg-red-500 p-1 mr-1 text-white rounded-sm">
                                        {{ $tag->name }}
                                    </a>
                                @endforeach
                            </div>
                            <span class="text-xs text-gray-600">
                                {{ $post->created_at->locale('es')->isoFormat('MMMM, DD/MM/YYYY') }}
                            </span><br>
                            <a href="{{ Route('posts.show', $post) }}"
                                class="text-2xl font-semibold sm:text-4xl group-hover:underline group-focus:underline">
                                {{ $post->name }}</a>
                            <p>{!! $post->extract !!}</p>
                        </div>
                    </div>
                @endif
            @endforeach
            <div class="grid justify-center grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($posts as $post)
                    @if (!$loop->first)
                        <div rel="noopener noreferrer"
                            class="max-w-sm mx-auto group hover:no-underline focus:no-underline bg-gray-50">
                            <a href="{{ Route('posts.show', $post) }}">
                                <img role="presentation" class="object-cover w-full h-44 bg-gray-500"
                                    src="@if ($post->image) {{ Storage::url($post->image->url) }}@else https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_960_720.jpg @endif">
                            </a>
                            <div class="p-6 space-y-2">
                                <div class="mb-2">
                                    @foreach ($post->tags as $tag)
                                        {{-- <span class=" {{ 'bg-' . $tag->color . '-600' }} text-white rounded-sm">
                                            {{ $tag->name }}
                                        </span> --}}
                                        <a href="{{ route('posts.tag', $tag) }}"
                                            class="bg-red-500 p-1 mr-1 text-white rounded-sm">
                                            {{ $tag->name }}
                                        </a>
                                    @endforeach
                                </div>
                                <span class="text-xs text-gray-600">
                                    {{ $post->created_at->locale('es')->isoFormat('MMMM, DD/MM/YYYY') }}
                                </span><br>
                                <a href="{{ Route('posts.show', $post) }}"
                                    class="text-2xl font-semibold group-hover:underline group-focus:underline">
                                    {{ $post->name }}</a>
                                <p>{!! $post->extract !!}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    {{-- <div class="localcontainer py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($posts as $post)
                @if (!$loop->last)
                    <article
                        class="w-full h-80 bg-cover bg-center @if ($loop->first) md:col-span-2 @endif"
                        style="background-image: url(@if ($post->image) {{ Storage::url($post->image->url) }}@else https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_960_720.jpg @endif)">
                        <div class="w-full h-full px-8 flex flex-col justify-center">

                            <div>
                                @foreach ($post->tags as $tag)
                                    <a href="{{ route('posts.tag', $tag) }}"
                                        class="inline-block px-3 h-6 {{ 'bg-' . $tag->color . '-600' }} text-white rounded-full">{{ $tag->name }}</a>
                                @endforeach
                            </div>

                            <h1 class="text-4xl text-white   leading-8 font-bold mt-2">
                                <a href="{{ Route('posts.show', $post) }}">
                                    {{ $post->name }}
                                </a>
                            </h1>
                        </div>
                    </article>
                @endif
            @endforeach
        </div>

        <div class="mt-4">
            {{ $posts->links() }}
        </div>

    </div> --}}
</x-app-layout>
