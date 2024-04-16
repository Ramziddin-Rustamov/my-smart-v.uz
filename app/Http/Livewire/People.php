<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class People extends Component
{

    public $users;
    public $name;

    public function mount()
    {
        $this->users = User::all();
    }

    public function updatedname($name){
        $this->users = User::where('first_name', 'like', '%' . $name . '%')->get();
    }
    public function render()
    {
        return view('livewire.people');
    }
}
