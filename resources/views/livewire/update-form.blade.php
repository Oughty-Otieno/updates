<div>
  <form wire:submit.prevent="submit" class="space-y-4 bg-white p-6 rounded-lg shadow-md">
    <label for="squad" class="block text-gray-700">Squad:</label>
    <select id="squad" wire:model="squad" class="block w-full border-gray-300 rounded-md shadow-sm">
        <option value="">Select Squad</option>
        @foreach($squadList as $squad)
            <option value="{{ $squad }}">{{ $squad }}</option>
        @endforeach
    </select>

    <label for="projects_deployed" class="block text-gray-700">Projects Deployed:</label>
    <textarea id="projects_deployed" wire:model="projects_deployed" class="block w-full border-gray-300 rounded-md shadow-sm"></textarea>

    <label for="projects_sit" class="block text-gray-700">Projects in SIT:</label>
    <textarea id="projects_sit" wire:model="projects_sit"class="block w-full border-gray-300 rounded-md shadow-sm"></textarea>

    <label for="projects_uat" class="block text-gray-700">Projects in UAT:</label>
    <textarea id="projects_uat" wire:model="projects_uat"class="block w-full border-gray-300 rounded-md shadow-sm"></textarea>

    <label for="incidents" class="block text-gray-700">Incidents:</label>
    <textarea id="incidents" wire:model="incidents"class="block w-full border-gray-300 rounded-md shadow-sm"></textarea>

    <label for="other_updates" class="block text-gray-700">Other Updates:</label>
    <textarea id="other_updates" wire:model="other_updates"class="block w-full border-gray-300 rounded-md shadow-sm"></textarea>

    <label for="week_number">Week Number:</label>
    <input type="number" id="week_number" wire:model="week_number">

    <button type="submit" class=" py-2 bg-blue-200 rounded-md hover:bg-blue-600">Submit</button>
</form>


    @if(session()->has('message'))
        <div>{{ session('message') }}</div>
    @endif
</div>
