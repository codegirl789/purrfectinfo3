<x-admin-layout>
    <div class="bg-gray-50 w-full mx-auto p-4 rounded-lg shadow">
        <div class="flex justify-between items-center">
            <x-admin.heading>Edit Category</x-admin.heading>
            <a href="{{ route('admin.category.index') }}"
                class="py-2 px-4 text-center bg-blue hover:bg-blue-hover text-white w-full basis-36 rounded-lg shadow">
                All Categories
            </a>
        </div>

        <div class="p-4">
            <form action="{{ route('admin.category.update', $category->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <input type="text" placeholder="Name" name="name" value="{{ $category->name }}"
                    class="py-2 px-4 my-2 bg-white w-full outline-none border-none rounded-lg shadow text-base placeholder:text-gray-700">
                <div class="flex justify-between items-start space-x-2">
                    <select name="super_id"
                        class="py-2 px-4 bg-white w-full outline-none border-none rounded-lg shadow text-base placeholder:text-gray-700">
                        <option>Select Parent Category</option>
                        @foreach ($super_categories as $super)
                            <option value="{{ $super->id }}">{{ $super->name }}</option>
                        @endforeach
                    </select>
                    <input type="file" name="image"
                        class="py-2 px-4 bg-white w-full outline-none border-none rounded-lg shadow text-base placeholder:text-gray-700">
                </div>
                <textarea name="description" rows="3" placeholder="Description"
                    class="py-2 px-4 my-2 bg-white w-full outline-none border-none rounded-lg shadow text-base placeholder:text-gray-700">{{ $category->description }}</textarea>
                <button type="submit"
                    class="py-2 px-4 my-2 bg-blue hover:bg-blue-hover text-white w-full outline-none border-none rounded-lg shadow text-base placeholder:text-gray-700">Edit
                    Category</button>
            </form>
        </div>
    </div>
</x-admin-layout>
