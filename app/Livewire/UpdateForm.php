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
      'projects_deployed' => 'nullable|string',
      'projects_sit' => 'nullable|string',
      'projects_uat' => 'nullable|string',
      'incidents' => 'nullable|string',
      'other_updates' => 'nullable|string',
      'week_number' => 'required|integer',
  ];

  public function submit()
  {

      $validatedData = $this->validate();
      Update::create($validatedData);
      dd("am here");
      session()->flash('message', 'Update recorded successfully!');
      $this->reset();
  }

  public function render()
  {
      return view('livewire.update-form')
      ->layout('layouts.app');
  }
}
