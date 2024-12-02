<div class="max-w-7xl mx-auto sm:px-6 lg:px-10">
  <div class="flex items-center gap-4 mb-6">
      <!-- Week Number Input -->
      <div class="flex flex-col">
          <label for="week_number" class="text-gray-700 font-medium mb-1">
              Week Number:
          </label>
          <input
              type="number"
              id="week_number"
              wire:model="week_number"
              class="border border-gray-300 rounded-md px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none text-gray-800"
              placeholder="Enter week number"
          />
      </div>

      <!-- Load Updates Button -->
      <button
          wire:click="loadUpdates"
          class="px-6 py-2 bg-blue-500 text-black rounded-md shadow-md hover:bg-blue-600 transition duration-150 mb-1">
          Load Updates
      </button>
  </div>


    <div class="p-10">
    <!-- Main Card -->
    <div class="bg-gray-100 shadow-lg rounded-lg p-6">
        <h2 class="text-xl font-bold text-gray-800 mb-4">Weekly Report - Week {{ $week_number }}</h2>

        <!-- Sub-Cards for Each Squad -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($updates as $updates)
                <div class="bg-white shadow-md rounded-md p-4">
                    <h3 class="text-lg font-semibold text-blue-700 mb-2">{{ $updates->squad }}</h3>
                    <p class="text-sm text-gray-600">
                        <strong>Projects Deployed:</strong> {{$updates->projects_deployed}}
                    </p>
                    <p class="text-sm text-gray-600">
                        <strong>Projects in SIT:</strong> {{$updates->projects_sit}}
                    </p>
                    <p class="text-sm text-gray-600">
                        <strong>Projects in UAT:</strong> {{$updates->projects_uat}}
                    </p>
                    <p class="text-sm text-gray-600">
                        <strong>Incidents Encountered:</strong> {{$updates->incidents}}
                    </p>
                    <p class="text-sm text-gray-600">
                        <strong>Other Updates:</strong> {{$updates->other_updates}}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</div>
</div>
