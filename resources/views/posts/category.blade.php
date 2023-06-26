<x-app-layout>
    <div>
        {{-- <h1 class=" text-center text-4xl bg-blue-200 font-bold uppercase text-blue-700 py-2">{{ $category->name }}</h1> --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 px-2 sm:px-6 lg:px-8 py-10">
            {{-- @foreach ($posts as $post)
                <x-card-post :post="$post" />
            @endforeach --}}

            @forelse ($posts as $post)
                <x-card-post :post="$post" />
            @empty
                <div class="col-span-2 flex items-center justify-center">
                    {{-- <div>
                        <img class="h-56 w-56" src="{{ asset('img/No.png') }}" alt="">
                    </div> --}}
                    <div class="text-gray-400 text-3xl">
                        No hay ningun post con esta categoria
                    </div>
                </div>
            @endforelse
            <div class="mt-4">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
