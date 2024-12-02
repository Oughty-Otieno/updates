<?php

namespace App\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{

    public $count = 1;

    public function increment(){
      $this->count++;
    }


    public $todo = '';
    public $my_list = [
      'try once',
      'try twice',
    ];



    public function add(){
      $this->my_list[] = $this->todo;
      $this->todo = '';
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
