<x-main-layout>
    <div class="">
        <a href="/" class="flex items-center font-semibold hover:underline">
            <svg class="w-4 h-4 pt-1" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
            </svg>
            <span class="ml-2"> All posts </span>
        </a>
    </div>

    <livewire:post-show :post="$post" :votesCount="$votesCount" />

    {{-- comments container --}}
    <div class="comments-container relative space-y-6 md:ml-24 pt-4 my-8 mt-1 ">
        <div
            class="comment-container relative flex hover:shadow-card transition duration-150 ease-in bg-white rounded-xl ">

            <div class="flex flex-col md:flex-row flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://i.pravatar.cc/60?v=2" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>

                <div class="w-full md:mx-4 mt-2 md:mt-0">
                    {{-- <h4 class="text-xl font-semibold">
                      <a href="#" class="hover:underline">A Unique Tittle Can Go Here</a>
                  </h4> --}}

                    <div class="text-gray-600">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae aperiam sit corrupti saepe
                        eaque reprehenderit porro, dolorum vero consequuntur, repellendus dolores ratione iusto nihil
                        voluptatem? Amet neque explicabo quos consectetur.
                    </div>

                    <div class="flex items-center justify-between md:mt-4 mt-2">
                        <div class="flex items-center text-xxs text-gray-400 font-semibold space-x-1">
                            <div class="font-semibold text-gray-800">John Doe123</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>

                        <div x-data="{ commentOpen: false }" class="flex items-center space-x-2">
                            <button @click="commentOpen = !commentOpen"
                                class="relative bg-gray-100 mt-3 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in py-2 px-3 ">
                                <svg fill="currentColor" width="24" height="6">
                                    <path
                                        d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                        style="color: rgba(163, 163, 163, .5)">
                                </svg>
                                <ul x-cloaked x-show="commentOpen" x-transition.oen.top.left.duration.500ms
                                    @click.away="commentOpen=false" @keydown.escape.window="commentOpen=false"
                                    class="absolute z-10 shadow-dialog w-44 font-semibold bg-white  rounded-xl text-left py-3 md:ml-8 right-0 md:left-0 mt-4 md:mt-0">
                                    <a href="#"
                                        class="hover:bg-gray-200 block transition duration-150 ease-in px-5 py-3">Mark
                                        As Spam</a>
                                    <a href="#"
                                        class="hover:bg-gray-200 block transition duration-150 ease-in px-5 py-3">Delete
                                        Post</a>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End comment Container --->

        <div
            class="is-admin  comment-container relative flex hover:shadow-card transition duration-150 ease-in bg-white rounded-xl ">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://i.pravatar.cc/60?v=3" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                    <div class="text-center text-blue text-xxs font-bold uppercase mt-1 ">
                        Admin
                    </div>
                </div>

                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">
                            Status changed to "Under Consideration"
                        </a>
                    </h4>

                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae aperiam sit corrupti saepe
                        eaque reprehenderit porro, dolorum vero consequuntur, repellendus dolores ratione iusto nihil
                        voluptatem? Amet neque explicabo quos consectetur.
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-1">
                            <div class="font-semibold text-blue">Andrea</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>

                        <div class="flex items-center space-x-2">

                            <button
                                class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                <svg fill="currentColor" width="24" height="6">
                                    <path
                                        d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                        style="color: rgba(163, 163, 163, .5)">
                                </svg>
                                <ul
                                    class="hidden absolute shadow-dialog w-44 font-semibold bg-white  rounded-xl text-left py-3 ml-8">
                                    <a href="#"
                                        class="hover:bg-gray-200 block transition duration-150 ease-in px-5 py-3">Mark
                                        As Spam</a>
                                    <a href="#"
                                        class="hover:bg-gray-200 block transition duration-150 ease-in px-5 py-3">Delete
                                        Post</a>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End comment Container --->

        <div
            class="comment-container relative flex hover:shadow-card transition duration-150 ease-in bg-white rounded-xl ">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://i.pravatar.cc/60?v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>

                <div class="w-full mx-4">
                    {{-- <h4 class="text-xl font-semibold">
                    <a href="#" class="hover:underline">A Unique Tittle Can Go Here</a>
                </h4> --}}

                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae aperiam sit corrupti saepe
                        eaque reprehenderit porro, dolorum vero consequuntur, repellendus dolores ratione iusto nihil
                        voluptatem? Amet neque explicabo quos consectetur.
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-1">
                            <div class="font-semibold text-gray-800">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>

                        <div class="flex items-center space-x-2">

                            <button
                                class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                <svg fill="currentColor" width="24" height="6">
                                    <path
                                        d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                        style="color: rgba(163, 163, 163, .5)">
                                </svg>
                                <ul
                                    class="hidden absolute shadow-dialog w-44 font-semibold bg-white  rounded-xl text-left py-3 ml-8">
                                    <a href="#"
                                        class="hover:bg-gray-200 block transition duration-150 ease-in px-5 py-3">Mark
                                        As Spam</a>
                                    <a href="#"
                                        class="hover:bg-gray-200 block transition duration-150 ease-in px-5 py-3">Delete
                                        Post</a>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End comment Container --->

    </div> <!-- end comments container -->

</x-main-layout>
