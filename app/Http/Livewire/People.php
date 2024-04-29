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
        $this->loadUsers();
    }

    public function updatedName($name)
    {
        if ($this->name == '') {
            $this->loadUsers();
        } else {
            $this->users = User::where('active_status', '1')
                ->where('first_name', 'like', '%' . $name . '%')
                ->orWhere('last_name', 'like', '%' . $name . '%')
                ->with('profiles')
                ->get();
        }
    }

    public function loadUsers()
    {
        $this->users = User::where('active_status', '1')
            ->with('profiles')
            ->get();
    }

    public function render()
    {
        return view('livewire.people');
    }
}
