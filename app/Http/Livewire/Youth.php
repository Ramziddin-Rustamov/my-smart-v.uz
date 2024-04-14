<?php

namespace App\Http\Livewire;
use App\Models\User;
use Livewire\Component;

class Youth extends Component
{

        public $name;
        public $youth;

          
        public function updatedname($name)
        {
            $this->youth = User::where('active_status', '1')
            ->where('name', 'like', '%' . $name . '%')
            ->whereRaw('TIMESTAMPDIFF(YEAR, birthday, CURDATE()) - TIMESTAMPDIFF(YEAR, birthday, DATE_FORMAT(CURDATE(), "%Y-%m-%d")) <= 25')
            ->get();
        }

        public function mount()
        {
            $this->youth = User::where('active_status', '1')
            ->whereRaw('TIMESTAMPDIFF(YEAR, birthday, CURDATE()) <= 25')
            ->get();
        }


      

        public function render()
        {
            return view('livewire.youth');
        }
}
