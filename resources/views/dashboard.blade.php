<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                <!-- Buttons Section -->
                <div class="flex justify-between items-center space-x-4">
                    <!-- Add Updates Button -->
                    <a
                        href="{{ route('update-form') }}"
                        class="px-4 py-2 bg-blue-500 text-black rounded-md shadow-md hover:bg-blue-600 transition duration-150">
                        Add Updates
                    </a>

                    <!-- Display Updates Button -->
                    <a
                        href="{{ route('update-display') }}"
                        class="px-4 py-2 bg-green-500 text-black rounded-md shadow-md hover:bg-green-600 transition duration-150">
                        Display Updates
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
