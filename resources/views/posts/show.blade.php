<x-app-layout>
 
    <div class="container mx-auto flex flex-wrap py-6">

        <!-- Post Section -->
        <section class="w-full md:w-2/3 flex flex-col items-center px-3">

            <article class="flex flex-col shadow my-4">
                <!-- Article Image -->
                <a href="#" class="hover:opacity-75">
                    <img
                        src="@if ($post->image) {{ Storage::url($post->image->url) }}@else https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_960_720.jpg @endif">
                </a>
                <div class="bg-white flex flex-col justify-start p-6">

                    <div class="inline-block">
                        @foreach ($post->tags as $tag)
                            <a href="{{ route('posts.tag', $tag) }}"
                                class="bg-red-700 text-white text-sm font-bold uppercase mb-4 p-1 rounded-sm mr-2">
                                {{ $tag->name }}
                            </a>
                        @endforeach
                    </div>
                    <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">{{ $post->name }}</a>
                    <p href="#" class="text-sm pb-8">
                        {{-- By <a href="#" class="font-semibold hover:text-gray-800">David Grzyb</a>, --}}
                        {{ $post->created_at->locale('es')->isoFormat('MMMM, DD/MM/YYYY') }}
                    </p>
                    <h1 class="text-lg font-bold pb-3"> {!! $post->extract !!}</h1>
                    <p class="pb-3"> {!! $post->body !!}</p>

                </div>
            </article>



        </section>

        <!-- Sidebar Section -->
        <aside class="w-full md:w-1/3 flex flex-col items-center px-3">

            <div class="sticky top-14 w-full bg-white shadow flex flex-col my-4 p-6">
                <p class="text-xl font-semibold pb-5">Lea mas de {{ $post->category->name }}</p>
                @foreach ($similares as $similar)
                    <a href="{{ route('posts.show', $similar) }}" class="grid grid-cols-3 mb-4 hover:opacity-75">
                        <div class="col-span-1">
                            <img class=" w-36 h-20 object-cover object-center"
                                src="@if ($similar->image) {{ Storage::url($similar->image->url) }} @else https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_960_720.jpg @endif">
                        </div>

                        <div class="col-span-2 bg-white border border-gray-200 px-2">
                            <span class="col-span-2  text-xs text-gray-600">{{ $similar->name }}</span>

                        </div>
                    </a>
                @endforeach


            </div>

        </aside>

    </div>
</x-app-layout>
