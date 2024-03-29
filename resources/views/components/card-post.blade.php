@props(['post'])
<article class="mb-8 bg-white shadow-lg overflow-hidden" >
    @if ($post->image)
        <img class="w-full h-72 object-cover object-center" src="{{Storage::url($post->image->url)}}" alt="">
    @else
        <img class="w-full h-72 object-cover object-center" src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_960_720.jpg" alt="">
    @endif
    <div class="px-6 py-4">
        <div class="py-4">
            @foreach ($post->tags as $tag)
                <a href="{{route('posts.tag', $tag)}}" class="inline-block bg-red-500 rounded-sm px-3 py-1 text-sm text-white font-light mr-2" >{{$tag->name}}</a>
            @endforeach
        </div>
        <h1 class="font-bold text-xl mb-2" >
            <a href="{{route('posts.show', $post)}}">{{$post->name}}</a>
        </h1>
        <div class="text-gray-700 text-base">
            {!!$post->extract!!}
        </div>
    </div>
   
</article>            