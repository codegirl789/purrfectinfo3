<x-main-layout>
    <div class=" flex flex-col md:flex-row justify-between md:space-y-0 md:space-x-6 mb-2 items-center">
        <h2 class="text-2xl w-full text-center">All Categories</h2>

        <div class="basis-32 flex items-center text-gray-800 font-semibold hover:underline">
            <a href="/" class="ml-2"> Go Home > </a>
        </div>
    </div>

    <div class="py-4">
        <div class="grid grid-cols-3 gap-4">
            @foreach ($categories as $category)
                <div class="card rounded-lg shadow bg-white">
                    <div class="image">
                        <a href="{{ route('category.show', $category->id) }}">
                            <img src="{{ asset($category->image) }}" alt="category image"
                                class="rounded-t-lg object-cover">
                        </a>
                    </div>
                    <div class="content p-2">
                        <div class="flex justify-between items-center pb-2">
                            <a href="{{ route('category.show', $category->id) }}"
                                class=" cursor-pointer text-xxs font-bold md:uppercase leading-none rounded-full text-center md:w-24 w-16 h-7 md:py-2 flex justify-center items-center md:px-4 px-2 {{ $category->color }} text-white">
                                {{ $category->name }}
                            </a>
                            <span class="text-gray-500 text-xs">{{ $category->created_at->diffForHumans() }}</span>
                        </div>
                        <a href="{{ route('category.show', $category->id) }}" class="text-lg">
                            {{ $category->description }}
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-main-layout>
