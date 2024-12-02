<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Update;
class UpdateForm extends Component
{
  public $squad;
  public $projects_deployed;
  public $projects_sit;
  public $projects_uat;
  public $incidents;
  public $other_updates;
  public $week_number;

  public $squadList = ['Squad A', 'Squad B', 'Squad C']; // Populate with actual squads


  protected $rules = [
      'squad' => 'required|string',
      'projects_deployed' => 'required|string',
      'projects_sit' => 'required|string',
      'projects_uat' => 'required|string',
      'incidents' => 'required|string',
      'other_updates' => 'nullable|string',
      'week_number' => 'required|integer',
  ];

  public function submit()
  {

      $validatedData = $this->validate();
      Update::create($validatedData);
      session()->flash('message', 'Update recorded successfully!');
      $this->reset();
  }

  public function render()
  {
    // Calculate the current week number
      $this->week_number = date('W'); // ISO-8601 week number of the year
      return view('livewire.update-form')
      ->layout('layouts.app');
  }
}
