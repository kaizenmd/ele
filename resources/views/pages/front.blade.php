<x-guest-layout>
    <div id="top-stories-hero" class="container-lg mx-auto px-5 pt-2">
        @foreach ($lastpost as $post)
        <div id="lead-item" class=" lg:flex items-center ">

            <div id="lead-item-img" class="mt-8 lg:mt-0 lg:w-2/3 lg:order-last">
                <div>
                    <a href="{{$post->slug}}" class="flex items-center overflow-hidden rounded-md">
                        <img class=" w-full lg:h-96 md:h-64 object-cover object-center transform hover:scale-105
                        duration-700 rounded-md" src="{{ $post->featured_image }}" alt="ultimul articol">
                    </a>
                </div>
            </div>
            <div id="lead-item-txt" class="lg:w-1/3 pr-4 pt-4">
                <a href="{{ $post->slug}}">
                    <h2
                        class="text-gray-800 hover:text-pink-900 dark:text-gray-100 text-xl sm:text-4xl md:text-5xl font-black font-serif text-left">
                        {{ $post->title }}
                    </h2>

                    <p class="hidden md:block text-gray-800 dark:text-gray-400 lg:max-w-md mt-4">
                        {{ $post->excerpt }}
                    </p>
                </a>
            </div>
        </div>
        @endforeach
        <div class="mx-10">
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                @foreach ($heroposts as $post)
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
        </div>
    </div>



</x-guest-layout>