<x-admin-layout>
    <div class="bg-white px-2 py-4 rounded-lg shadow">
        <div class="flex justify-between items-center mb-2">
            <x-admin.heading>View Category</x-admin.heading>
            <a href="{{ route('admin.category.index') }}"
                class="py-2 px-4 text-center bg-blue hover:bg-blue-hover text-white w-full basis-52 rounded-lg shadow">
                View All Categories
            </a>
        </div>

        <div class="p-4 rounded-lg shadow bg-white">
            <div class="flex justify-between items-start space-x-4">
                <img src="{{ asset($category->image) }}" alt="image" class="w-60 h-60 basis-60 object-cover rounded">
                <div
                    class="flex flex-col justify-start space-y-2 h-76 w-full text-lg py-2  bg-gray-50 rounded-lg shadow p-4">
                    <span class="text-xl font-semibold">{{ $category->name }}</span>
                    <span>{{ $category->SubCategories->count() }} | Subcategories</span>
                    <span>{{ $category->SuperCategory->name }}</span>
                    <span>{{ $category->updated_at->diffForHumans() }}</span>
                    <p class="py-2">
                        <span class="font-semibold">Description :</span>
                        {{ $category->description }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
