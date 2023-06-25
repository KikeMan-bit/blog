<x-app-layout>
    <div class="bg-gray-100 max-w-7xl m-auto px-2 sm:px-6 lg:px-8">
        <h1 class=" text-center text-4xl py-10 font-bold" >#{{$category->name}}</h1>
        @foreach ($posts as $post)
           <x-card-post :post="$post" />
        @endforeach
        <div class="mt-4" >
            {{$posts->links()}}
        </div>
    </div>
</x-app-layout>