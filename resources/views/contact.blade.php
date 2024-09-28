<x-layout>
    <x-slot:title>Contact</x-slot>

    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">{{ __('Contact Me At') }}</h1>

        @if (session('success'))
            <div class="mb-4 p-2 text-green-600">
                {{ session('success') }}
            </div>
        @endif
        <p class="mt-4 text-base leading-loose text-gray-600">
                Email:chhaganipk@rknec.edu
              </div>
        <ul class="flex items-center space-x-3">
                    @foreach (config('info.sociallinks') as $link)
                    <li>
                        <a
                            href="{{ url($link['url'])}}" target="_blank"
                            class="group flex h-10 w-10 items-center justify-center rounded-full border border-gray-300/70 bg-transparent transition duration-300 ease-in-out sm:h-12 sm:w-12"
                        >
                            <x-dynamic-component :component="$link['name']" />
                        </a>
                    </li>
                    @endforeach
                </ul>
    </div>
</x-layout>
