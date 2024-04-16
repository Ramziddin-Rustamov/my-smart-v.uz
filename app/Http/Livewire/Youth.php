<?php

namespace App\Http\Livewire;
use App\Models\User;
use Livewire\Component;
use App\Models\UserProfile;
use Illuminate\Support\Facades\DB;

class Youth extends Component
{

        public $name;
        public $youth;

          
        public function updatedname($name)
        {
            $this->youth = User::join('user_profiles', 'users.id', '=', 'user_profiles.user_id')
            ->where('users.active_status', '1')
            ->where('users.first_name', 'like', '%' . $name . '%')
            ->orWhere('users.last_name', 'like', '%' . $name . '%')
            ->where(DB::raw('TIMESTAMPDIFF(YEAR, user_profiles.birthday, CURDATE())'), '<=', 25)
            ->get();
        }

        public function mount()
        {
            $this->youth = User::join('user_profiles', 'users.id', '=', 'user_profiles.user_id')
            ->where('users.active_status', '1')
            ->where(DB::raw('TIMESTAMPDIFF(YEAR, user_profiles.birthday, CURDATE())'), '<=', 25)
            ->get();
        }


      

        public function render()
        {
            return view('livewire.youth');
        }
}
