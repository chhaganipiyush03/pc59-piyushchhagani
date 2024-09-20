<x-layout>
    <x-slot:title>Contact</x-slot>

    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">{{ __('Contact Us') }}</h1>

        @if (session('success'))
            <div class="mb-4 p-2 text-green-600">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('contact.submit') }}" method="POST">
            @csrf
            <div class="mb-4">
                <input type="text" name="name" placeholder="Your Name" required class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <input type="email" name="email" placeholder="Your Email" required class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <textarea name="message" placeholder="Your Message" required class="w-full p-2 border border-gray-300 rounded"></textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Send Message</button>
        </form>
    </div>
</x-layout>
