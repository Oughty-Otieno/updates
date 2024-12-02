<div>
    {{-- Because she competes with no one, no one can compete with her. --}}

    Test:{{$count}}
    <button wire:click = "increment">+</button>

    <form wire:submit = "add">
      <input type='text' wire:model="todo"></input>
      <button type='submit'>Add</button>
    </form>


    <ul>
    @foreach ($my_list as $list)
       <li>{{$list}}</li>
    @endforeach
   </ul>
</div>
