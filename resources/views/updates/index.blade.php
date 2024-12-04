<x-app-layout>
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-10">
            <livewire:update-display>
        <!-- Updates List for Current Week -->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-lg p-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Updates for  The Week</h3>
                @if ($updates->isEmpty())
                    <p class="text-gray-500">No updates available for this week.</p>
                @else
                    <table class="w-full border-collapse border-gray-200 text-left">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="px-4 py-2 border border-gray-300">Squad Name</th>
                                <th class="px-4 py-2 border border-gray-300 text-center">Resident QE</th>
                                <th class="px-4 py-2 border border-gray-300 text-center">Date</th>
                                <th class="px-4 py-2 border border-gray-300 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                @foreach ($updates as $update)
                                <tr>
                                    <td class="px-4 py-2 border border-gray-300">{{ $update->squad}}</td>
                                    <td class="px-4 py-2 border border-gray-300"></td>
                                    <td class="px-4 py-2 border border-gray-300"></td>
                                    <td class="px-42 py-2 border border-gray-300">

                                        <!-- <button
                                            wire:click="viewUpdate({{ $update->id }})"
                                            class="px-4 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition duration-150">

                                            View
                                        </button> -->
                                        <div class="flex space-x-4">
                                        <a
                                            href="{{ route('updates.edit', $update->id) }}"
                                            class="px-4 py-1 bg-yellow-500 text-white rounded-md hover:bg-yellow-600 transition duration-150">
                                            Edit
                                        </a>

                                        <form action="{{ route('updates.destroy', $update->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this update?');">
                                                       @csrf
                                                       @method('DELETE')
                                                       <button
                                                           type="submit"
                                                           class="px-4 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 transition duration-150">
                                                           Delete
                                                       </button>
                                        </form>
                                      </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
      </div>
    </div>
  </x-app-layout>
