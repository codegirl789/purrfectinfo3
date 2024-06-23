<x-main-layout>
    <div class=" flex flex-col md:flex-row  md:space-y-0 md:space-x-6 mb-2 items-center">
        <div class="md:w-1/3 w-full">
            <div class="flex items-center font-semibold hover:underline">
                <svg class="w-4 h-4 pt-1" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>
                <a href="/" class="ml-2"> Go Home </a>
            </div>
        </div>
    </div>

    <div class="px-2 py-4">
        <div class="flex justify-between items-center">
            <h2 class="text-2xl">
                My Posts
            </h2>

            <div class="">
                {{ $posts->links() }}
            </div>
        </div>

        <div class="py-4">
            <div class="grid grid-flow-row md:grid-cols-3 lg:col-span-3  gap-4">
                @foreach ($posts as $post)
                    <div class="card rounded-lg shadow bg-white">
                        <div class="image">
                            <a href="{{ route('posts.show', $post->id) }}">
                                <img src="{{ asset($post->image) }}" alt="post image" class="rounded-t-lg object-cover">
                            </a>
                        </div>
                        <div class="content p-2">
                            <div class="flex justify-between items-center pb-2">
                                <a href="{{ route('posts.show', $post->id) }}"
                                    class=" cursor-pointer text-xxs font-bold md:uppercase leading-none rounded-full text-center md:w-24 w-16 h-7 md:py-2 flex justify-center items-center md:px-4 px-2 {{ $post->status->classes }} ">
                                    {{ $post->Category->name }}
                                </a>
                                <span class="text-gray-500 text-xs">{{ $post->created_at->diffForHumans() }}</span>
                            </div>
                            <a href="{{ route('posts.show', $post->id) }}"
                                class="text-lg font-semibold hover:underline">
                                {{ $post->title }}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-main-layout>
