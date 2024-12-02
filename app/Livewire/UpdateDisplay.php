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
        //dd($this->updates);
    }

    public function render()
    {
        return view('livewire.update-display', ['updates' => $this->updates])
        ->layout('layouts.app');
    }
}
