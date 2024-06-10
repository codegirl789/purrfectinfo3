<x-admin-layout>
    <div class="bg-white p-4 rounded-lg shadow">
        <div class="flex justify-between items-center">
            <x-admin.heading>All Posts</x-admin.heading>
            <a href="{{ route('admin.post.create') }}"
                class="py-2 px-4 text-center bg-blue text-white w-full basis-36 rounded-lg shadow">
                Create Post
            </a>
        </div>

        <div class="px-4 py-2">
            {{ $posts->links() }}
        </div>

        <div class="relative overflow-x-auto rounded-lg shadow bg-gray-50 mt-2">

            <table class="w-full text-sm text-left rtl:text-right">
                <thead class="text-xs text-gray-700 uppercase">
                    <tr>
                        <th scope="col" class="px-2 py-3">
                            Image
                        </th>
                        <th scope="col" class="px-2 py-3">
                            Title
                        </th>
                        <th scope="col" class="px-2 py-3">
                            Category
                        </th>
                        <th scope="col" class="px-2 py-3">
                            Sub_Category
                        </th>
                        <th scope="col" class="px-2 py-3">
                            Updated
                        </th>
                        <th scope="col" class="px-2 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr class="bg-white hover:bg-gray-50 cursor-pointer border-b ">
                            <th scope="row" class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                <img src="{{ asset($post->image) }}" alt="image"
                                    class="w-14 h-14 object-cover rounded-full">
                            </th>
                            <td class="px-2 py-4">
                                {{ $post->title }}
                            </td>
                            <td class="px-2 py-4">
                                {{ $post->SubCategory->name }}
                            </td>
                            <td class="px-2 py-4">
                                {{ $post->Category->name }}
                            </td>
                            <td class="px-2 py-4">
                                {{ $post->updated_at->diffForHumans() }}
                            </td>
                            <td class="px-2 py-4 flex space-x-2 m-auto">
                                <a href="#">
                                    <i class="fas fa-lg fa-trash text-red"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-regular fa-lg fa-pen-to-square text-blue "></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="px-4 py-2">
                {{ $posts->links() }}
            </div>

        </div>
    </div>






</x-admin-layout>
