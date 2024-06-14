<x-admin-layout>
    <div class="bg-gray-50 w-full mx-auto p-4 rounded-lg shadow">
        <div class="flex justify-between items-center">
            <x-admin.heading>Create New Category</x-admin.heading>
            <a href="{{ route('admin.category.index') }}"
                class="py-2 px-4 text-center bg-blue hover:bg-blue-hover text-white w-full basis-36 rounded-lg shadow">
                All Categories
            </a>
        </div>

        <div class="p-4">
            <form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" placeholder="Name" name="name"
                    class="py-2 px-4 my-2 bg-white w-full outline-none border-none rounded-lg shadow text-base placeholder:text-gray-700">
                <div class="flex justify-between items-start space-x-2">
                    <select name="super_id"
                        class="py-2 px-4 bg-white w-full outline-none border-none rounded-lg shadow text-base placeholder:text-gray-700">
                        <option>Select Parent Category</option>
                        @foreach ($super_categories as $super)
                            <option value="{{ $super->id }}">{{ $super->name }}</option>
                        @endforeach
                    </select>
                    <select name="color"
                        class="py-2 px-4 bg-white w-full outline-none border-none rounded-lg shadow text-base placeholder:text-gray-700">
                        <option>Select Color</option>
                        @foreach ($colors as $color)
                            <option value="{{ $color->id }}" class="{{ $color->classes }}">{{ $color->name }}
                            </option>
                        @endforeach
                    </select>
                    <input type="file" name="image"
                        class="py-2 px-4 bg-white w-full outline-none border-none rounded-lg shadow text-base placeholder:text-gray-700">
                </div>
                <textarea name="description" rows="3" placeholder="Description"
                    class="py-2 px-4 my-2 bg-white w-full outline-none border-none rounded-lg shadow text-base placeholder:text-gray-700"></textarea>
                <button type="submit"
                    class="py-2 px-4 my-2 bg-blue hover:bg-blue-hover text-white w-full outline-none border-none rounded-lg shadow text-base placeholder:text-gray-700">Create
                    Category</button>
            </form>
        </div>
    </div>
</x-admin-layout>
