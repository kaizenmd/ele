<x-guest-layout>

    <div class="md:flex">
        <div id='content' class="mx-5 md:w-3/4 mb-5">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-2">
                @foreach ($postsByCategory as $post)
                <div class="mt-5 container">
                    <div class="container overflow-hidden">
                        <a href="/{{ $post->slug }}">
                            <div class="container overflow-hidden rounded-md">
                                <img class="w-full h-36 object-cover object-center transform hover:scale-105 duration-700 rounded-md"
                                    src="{{ $post->featured_image }}" alt="articol">
                            </div>
                            <div class="mt-3">
                                <h4 class="text-xl  font-bold">{{ $post->title }}</h4>
                                <small>{{ $post->publish_date }}</small>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            <div id="pagination">{{ $postsByCategory->links() }}</div>
        </div>
        <div id="right-side" class="mx-5 md:w-1/4 sticky">
            <h1 class="font-bold text-ms text-gray-600 hover:text-gray-500">Promo</h1>
        </div>
    </div>



</x-guest-layout>