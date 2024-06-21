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

    <div class="">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        @endif
    </div>

    <div class="w-3/4 mx-auto bg-white p-4 rounded-lg shadow">
        <h1 class="text-2xl font-semibold text-center mb-2">Contact Us</h1>
        <form action="{{ route('contact.store') }}" method="POST">
            @csrf
            <input type="text" placeholder="Name" name="name"
                class="outline-none border-none shadow-input rounded-xl w-full my-1 p-2 focus:ring-blue">

            <input type="email" placeholder="Email" name="email"
                class="outline-none border-none shadow-input rounded-xl w-full my-1 p-2 focus:ring-blue">

            <textarea name="message" rows="3" placeholder="Message" name="message"
                class="outline-none border-none shadow-input rounded-xl w-full my-1 p-2 focus:ring-blue resize-none"></textarea>

            <button type="submit"
                class="outline-none border-none shadow bg-blue hover:bg-blue-hover text-white rounded-xl w-full my-1 p-2">Send
                Message</button>
        </form>
    </div>
</x-main-layout>
