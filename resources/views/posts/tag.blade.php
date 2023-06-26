<x-app-layout>
    <div class="bg-blue-100">
        <div class="flex justify-center items-center p-4">
            <h2 class="text-4xl font-bold bg-red-500 px-6 py-2 text-white rounded-sm">#{{ $tag->name }}</h2>
        </div>
        <div class=" grid grid-cols-1 gap-4 md:grid-cols-2 px-2">
            @foreach ($posts as $post)
                <x-card-post :post="$post" />
            @endforeach
            <div class="mt-4">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
