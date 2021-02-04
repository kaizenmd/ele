<x-guest-layout>
    <div id="article_template" class="max-w-6xl mx-auto md:flex">
        <div id='content' class="mx-5 md:w-3/4 mb-5">
            <div id="title" class="max-w-6xl mx-auto py-2 mb-4">
                <h1 class="text-gray-800 dark:text-white text-2xl sm:text-4xl md:text-5xl font-bold text-left mb-4">
                    {{ $post->title }}
                </h1>
                <div id="autor" class=" sm:flex flex-row-reverse justify-between items-center">
                    <div id="tools" class="space-x-5 mr-5">
                        <button id='social-share'>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M14 6C14 6.28742 14.0303 6.56777 14.0879 6.83801L9.01694 9.3735C8.28363 8.53189 7.20393 8 6 8C3.79086 8 2 9.79086 2 12C2 14.2091 3.79086 16 6 16C7.20393 16 8.28363 15.4681 9.01694 14.6265L14.0879 17.162C14.0303 17.4322 14 17.7126 14 18C14 20.2091 15.7909 22 18 22C20.2091 22 22 20.2091 22 18C22 15.7909 20.2091 14 18 14C16.7961 14 15.7164 14.5319 14.9831 15.3735L9.91208 12.838C9.96968 12.5678 10 12.2874 10 12C10 11.7126 9.96968 11.4322 9.91208 11.162L14.9831 8.6265C15.7164 9.46811 16.7961 10 18 10C20.2091 10 22 8.20914 22 6C22 3.79086 20.2091 2 18 2C15.7909 2 14 3.79086 14 6ZM8 12C8 13.1046 7.10457 14 6 14C4.89543 14 4 13.1046 4 12C4 10.8954 4.89543 10 6 10C7.10457 10 8 10.8954 8 12ZM18 8C19.1046 8 20 7.10457 20 6C20 4.89543 19.1046 4 18 4C16.8954 4 16 4.89543 16 6C16 7.10457 16.8954 8 18 8ZM20 18C20 19.1046 19.1046 20 18 20C16.8954 20 16 19.1046 16 18C16 16.8954 16.8954 16 18 16C19.1046 16 20 16.8954 20 18Z"
                                    fill="black" />
                            </svg>
                        </button>
                        <button id="bookmark">
                            <svg width="18" height="22" viewBox="0 0 18 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M7 0C5.90652 0 5.01801 0.892355 5.00027 2H16V16.9156L18 17.9324V2.03378C18 0.910552 17.1046 0 16 0H7ZM7 18.118L0 21.618V6C0 4.89543 0.89543 4 2 4H12C13.1046 4 14 4.89543 14 6V21.618L7 18.118ZM2 18.382L7 15.882L12 18.382V6H2V18.382Z"
                                    fill="black" />
                            </svg>

                        </button>
                        <button id="more-links">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M5 14C3.89543 14 3 13.1046 3 12C3 10.8954 3.89543 10 5 10C6.10457 10 7 10.8954 7 12C7 13.1046 6.10457 14 5 14ZM12 14C10.8954 14 10 13.1046 10 12C10 10.8954 10.8954 10 12 10C13.1046 10 14 10.8954 14 12C14 13.1046 13.1046 14 12 14ZM17 12C17 13.1046 17.8954 14 19 14C20.1046 14 21 13.1046 21 12C21 10.8954 20.1046 10 19 10C17.8954 10 17 10.8954 17 12Z"
                                    fill="black" />
                            </svg>

                        </button>

                    </div>
                    <div class="text-sm text-gray-600 flex items-center space-x-3 ">
                        <img class="h-8" src="{{$post->author->avatar}}" alt="{{$post->author->name}}">
                        <div>{{$post->author->name}}</div>
                        <div class="">{{$post->created_at->diffForHumans()}}</div>
                    </div>
                </div>


            </div>
            <div id="content-text">{!! $post->content !!}</div>
        </div>
        <div id="right-side" class="mx-5 md:w-1/4 sticky">

            <div id="tags" class="mb-5">
                <h4 class="text-gray-600 uppercase tracking-wide font-bold mb-3 text-sm lg:text-xl">
                    Tag
                </h4>
                @foreach ($post->tags as $tag)
                <a href="category/{{$tag->slug}}">
                    <button
                        class=" rounded p-1 border-2 border-gray-600 text-gray-600  text-xs font-semibold">{{$tag->name}}</button>
                </a>
                @endforeach
            </div>

            <div id="last-posts">
                <h4 class="text-gray-600 uppercase tracking-wide font-bold mb-3 text-sm lg:text-xl">
                    Cele mai noi articole
                </h4>
                <div>
                    <ul class="overflow-x-hidden text-gray-900 font-medium">
                        @foreach ($lastposts as $post)
                        <li class="my-5">
                            <a href="{{$post->slug}}">
                                <h5 class="font-bold">{{$post->title}}</h5>
                                <small class="text-gray-600">{{$post->created_at->diffForHumans()}}</small>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>


            </div>


        </div>

    </div>
</x-guest-layout>