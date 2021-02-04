<x-guest-layout>
    <div class=" mx-5">
        <div id="toate categorieiile" class="flex flex-col items-center justify-self-center">
            <h4 class="text-gray-600 uppercase tracking-wide font-bold mb-3 text-sm lg:text-xl">
                Toate categoriile
            </h4>
            <div class="space-x-3">
                @foreach ($tags as $tag)
                <a href="category/{{$tag->slug}}">
                    <button
                        class="rounded my-3 px-3 py-1 border border-gray-600 hover:text-gray-800 text-gray-600  text-xs font-semibold">{{$tag->name}}</button>
                </a>
                @endforeach
            </div>
        </div>
        <div class="mx-5">
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                @foreach ($posts as $post)
                <div class="mt-5 container">
                    <div class="container overflow-hidden">
                        <a href="/{{ $post->slug }}">
                            <div class="container overflow-hidden rounded-md">
                                <img class="w-full h-32 lg:h-64 object-cover object-center transform hover:scale-105 duration-700 rounded-md"
                                    src="{{ $post->featured_image }}" alt="articol">
                            </div>
                            <div class="mt-3">
                                <h4 class="text-xl md:text-2xl font-bold">{{ $post->title }}</h4>
                                <small>{{ $post->publish_date }}</small>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            <div id="pagination">{{ $posts->links() }}</div>
        </div>
    </div>

</x-guest-layout>