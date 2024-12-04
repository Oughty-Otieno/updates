<x-app-layout>
<div class="max-w-7xl mx-auto sm:px-6 lg:px-10">
  <form action="{{ route('updates.update', $update->id) }}" method="POST" class="space-y-6 bg-white p-6 rounded-lg shadow-md">
    @csrf
    @method('PUT')
    <label for="week_n" class="block text-gray-700 font-medium mb-2">Week Number:{{$update->week_number}}</label>
<input
    type="number"
    name="week_number"
    class="block w-32 border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500 text-gray-800"
    value ={{$update->week_number}}
/>
@error('week_number')
    <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
@enderror



    <label for="squad" class="block text-gray-700 space-y-4">Squad:</label>
    <select id="squad" name="squad" class="block w-full border-gray-300 rounded-md shadow-sm">
        <option value="{{$update->squad}}">{{$update->squad}}</option>
        @foreach($squadList as $squad)
            <option value="{{$squad}}">{{ $squad }}</option>
        @endforeach
    </select>
    @error('squad')
    <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
    @enderror

    <label for="projects_deployed" class="block text-gray-700">Projects Deployed:</label>
    <textarea id="projects_deployed"
    name="projects_deployed"
    class="block w-full border-gray-300 rounded-md shadow-sm p-2 resize-none overflow-hidden focus:ring-blue-500 focus:border-blue-500"
    rows="1"
    oninput="this.style.height = 'auto'; this.style.height = this.scrollHeight + 'px';"
    >{{$update->projects_deployed}}</textarea>
    @error('projects_deployed')
        <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
    @enderror


    <label for="projects_sit" class="block text-gray-700">Projects in SIT:</label>
    <textarea id="projects_sit"
     name ="projects_sit"
     class="block w-full border-gray-300 rounded-md shadow-sm p-2 resize-none overflow-hidden focus:ring-blue-500 focus:border-blue-500"
     rows="1"
     oninput="this.style.height = 'auto'; this.style.height = this.scrollHeight + 'px';"
     placeholder="Type your updates here..."
     >{{$update->projects_sit}}</textarea>
   @error('projects_sit')
   <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
   @enderror


    <label for="projects_uat" class="block text-gray-700">Projects in UAT:</label>
    <textarea id="projects_uat"
    name="projects_uat"
    class="block w-full border-gray-300 rounded-md shadow-sm p-2 resize-none overflow-hidden focus:ring-blue-500 focus:border-blue-500"
    rows="1"
    oninput="this.style.height = 'auto'; this.style.height = this.scrollHeight + 'px';"
    >{{$update->projects_uat}} </textarea>
    @error('projects_uat')
    <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
    @enderror

    <label for="incidents" class="block text-gray-700">Incidents:</label>
    <textarea id="incidents"
    name="incidents"
    class="block w-full border-gray-300 rounded-md shadow-sm p-2 resize-none overflow-hidden focus:ring-blue-500 focus:border-blue-500"
    rows="1"
    oninput="this.style.height = 'auto'; this.style.height = this.scrollHeight + 'px';"
    placeholder="Type your updates here..."
    >{{$update->incidents}}</textarea>
    @error('incidents')
    <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
    @enderror

    <label for="other_updates" class="block text-gray-700">Other Updates:</label>
    <textarea id="other_updates" wire:model="other_updates"
    class="block w-full border-gray-300 rounded-md shadow-sm p-2 resize-none overflow-hidden focus:ring-blue-500 focus:border-blue-500"
    rows="1"
    name="other_updates"
    oninput="this.style.height = 'auto'; this.style.height = this.scrollHeight + 'px';"
    placeholder="Type your updates here..."
    >{{$update->other_updates}}</textarea>
    @error('other_updates')
    <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
    @enderror

    <button
        type="submit"
        class="px-6 py-2 bg-blue-500 font-semibold rounded-md shadow-md hover:bg-blue-600 focus:ring-2 focus:ring-blue-400 focus:outline-none transition ease-in-out duration-150">
        Update
    </button>
</form>

    @if(session()->has('message'))
        <div>{{ session('message') }}</div>
    @endif
</div>
</x-app-layout>
