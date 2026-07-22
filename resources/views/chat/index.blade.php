<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Chat') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="mb-4 text-gray-600">Welcome to the chat room. Add your chat UI here.</p>

                    <div class="border border-gray-200 rounded-lg p-4 bg-gray-50">
                        <p class="text-sm text-gray-500">This is the chat index view for route <code>chat.index</code>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>