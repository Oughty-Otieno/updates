<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Update;

class UpdateDisplay extends Component
{
    public $week_number;
    public $updates = [];

    public function loadUpdates()
    {

        $this->updates = Update::where('week_number', $this->week_number)->get();
    }

    public function render()
    {
        //$this->week_number = date('W'); // ISO-8601 week number of the year
        return view('livewire.update-display', ['updates' => $this->updates])
        ->layout('layouts.app');

    }
}
