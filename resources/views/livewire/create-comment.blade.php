<div>
    <div class="relative" x-data="{ replyOpen: false }">
        <button @click="replyOpen=!replyOpen" type="button"
            class="bg-blue-500 md:w-32 w-28 text-white rounded-xl md:text-sm text-xs px-4 py-2 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in ">
            Reply
        </button>
        <div x-cloak x-show="replyOpen" x-transition.open.top.right.duration.500ms @click.away="replyOpen = false"
            @keydown.escape.window="replyOpen=false"
            class=" absolute z-10 md:w-104 w-64 text-left font-semibold text-sm bg-white shadow-dialog rounded-xl md:ml-2 mt-2">
            @auth

                <div>
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
                <form wire:submit.prevent="submit" class="space-y-4 px-4 py-6">
                    <div>
                        <textarea name="message" wire:model="message" id="message" cols="30" rows="4"
                            class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 border-none px-4 py-2"
                            placeholder="Go ahead, don't be shy. Share your thoughts..."></textarea>
                    </div>

                    {{-- <div class="flex items-center space-x-3"> --}}
                    <button type="submit" @click="replyOpen = false"
                        class="flex items-center w-full justify-center text-sm bg-blue-500 text-white font-semibold rounded-xl border border-blue hover:bg-blue-600  transition duration-150 ease-in px-6 py-2">
                        Post Comment
                    </button>

                </form>
            @else
                <div class="px-4 pb-4">
                    <p class="py-3">Please Login to reply</p>
                    <a href="{{ route('login') }}" class="py-2 px-4 bg-blue text-white rounded-lg shadow">Login</a>
                </div>
            @endauth
        </div>

    </div>
</div>
