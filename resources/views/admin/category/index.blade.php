<x-admin-layout>
    <div class="bg-white p-2 rounded-lg shadow">
        <div class="flex justify-between items-center my-2">
            <x-admin.heading>All categories</x-admin.heading>
            <a href="{{ route('admin.category.create') }}"
                class="py-2 px-4 text-center bg-blue hover:bg-blue-hover text-white w-full basis-52 rounded-lg shadow">
                Create New Category
            </a>
        </div>

        <div class="relative overflow-x-auto rounded-lg shadow bg-gray-50">

            <div class="px-4 py-2">
                {{-- {{ $categories->links() }} --}}
            </div>

            <table class="w-full text-sm text-left rtl:text-right">
                <thead class="text-xs text-gray-700 uppercase">
                    <tr>
                        <th scope="col" class="px-2 py-3">
                            Image
                        </th>
                        <th scope="col" class="px-2 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-2 py-3">
                            Content
                        </th>
                        <th scope="col" class="px-2 py-3">
                            Super_Category
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
                    @foreach ($categories as $category)
                        <tr class="bg-white hover:bg-gray-50 cursor-pointer border-b ">
                            <th scope="row" class="p-2 font-medium text-gray-900 whitespace-nowrap ">
                                <img src="{{ asset($category->image) }}" alt="image"
                                    class="w-14 h-14 object-cover rounded-full">
                            </th>
                            <td class="p-2">
                                <a href="{{ route('admin.category.show', $category->id) }}">
                                    {{ $category->name }}
                                </a>
                            </td>
                            <td class="p-2 line-clamp-3">
                                <a href="{{ route('admin.category.show', $category->id) }}">
                                    {{ $category->description }}
                                </a>
                            </td>
                            <td class="p-2">
                                {{ $category->SuperCategory->name }}
                            </td>
                            <td class="p-2">
                                {{ $category->updated_at->diffForHumans() }}
                            </td>
                            <td class="p-2 flex space-x-8 m-auto">
                                <form action="{{ route('admin.category.destroy', $category->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        onclick="return confirm('Are you sure you want to delete this?');">
                                        <i class="fas fa-lg fa-trash text-red"></i>
                                    </button>
                                </form>
                                <a href="{{ route('admin.category.edit', $category->id) }}">
                                    <i class="fa-regular fa-lg fa-pen-to-square text-blue  "></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="px-4 py-2">
                {{-- {{ $categorys->links() }} --}}
            </div>

        </div>
    </div>
</x-admin-layout>
