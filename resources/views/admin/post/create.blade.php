<x-admin-layout>
    <div class="bg-gray-50 w-full mx-auto p-4 rounded-lg shadow">
        <div class="flex justify-between items-center">
            <x-admin.heading>Create New Post</x-admin.heading>
            <a href="{{ route('admin.post.index') }}"
                class="py-2 px-4 text-center bg-blue text-white w-full basis-36 rounded-lg shadow">
                All Posts
            </a>
        </div>

        <div class="p-4">
            <form action="#">
                @csrf
                <input type="text" placeholder="Title"
                    class="py-2 px-4 my-2 bg-white w-full outline-none border-none rounded-lg shadow placeholder:text-black">
                <div class="flex justify-between items-start space-x-2">
                    <select name="category_id"
                        class="py-2 px-4 bg-white w-full outline-none border-none rounded-lg shadow placeholder:text-black">
                        <option value="#">Select category</option>
                    </select>
                    <select name="status_id"
                        class="py-2 px-4 bg-white w-full outline-none border-none rounded-lg shadow placeholder:text-black">
                        <option value="#">Select status</option>
                    </select>
                    <input type="file" placeholder="Title"
                        class="py-2 px-4 bg-white w-full outline-none border-none rounded-lg shadow placeholder:text-black">
                </div>
                <textarea name="content" rows="3" placeholder="Content"
                    class="py-2 px-4 my-2 bg-white w-full outline-none border-none rounded-lg shadow placeholder:text-black"></textarea>
                <button type="submit"
                    class="py-2 px-4 my-2 bg-blue text-white w-full outline-none border-none rounded-lg shadow placeholder:text-black">Create
                    Post</button>
            </form>
        </div>
    </div>
</x-admin-layout>
