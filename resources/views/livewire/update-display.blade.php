<div>
    <label for="week_number">Week Number:</label>
    <input type="number" id="week_number" wire:model="week_number">

    <button wire:click="loadUpdates">Load Updates</button>

    <div>
        @if($updates)
            @foreach($updates as $update)
                <div>
                    <h3>{{ $update->squad }}</h3>
                    <p>Deployed: {{ $update->projects_deployed }}</p>
                    <p>SIT: {{ $update->projects_sit }}</p>
                    <p>UAT: {{ $update->projects_uat }}</p>
                    <p>Incidents: {{ $update->incidents }}</p>
                    <p>Other Updates: {{ $update->other_updates }}</p>
                </div>
            @endforeach
        @endif
    </div>
</div>
