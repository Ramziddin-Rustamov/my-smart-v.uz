<?php 
namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Youth extends Component
{
    public $name;
    public $youth;

    public function updatedName($name)
    {
        if (!empty($name)) {
            $this->youth = User::where('active_status', '1')
                ->where(function($query) use ($name) {
                    $query->where('first_name', 'like', '%' . $name . '%')
                        ->orWhere('last_name', 'like', '%' . $name . '%');
                })
                ->whereHas('profile', function($query) {
                    $query->whereRaw('TIMESTAMPDIFF(YEAR, user_profiles.birthday, CURDATE()) <= ?', [25]);
                })
                ->with('profiles')
                ->get();
        } else {
            $this->youth = null;
        }
    }

    public function mount()
    {
        $this->youth = User::where('active_status', '1')
            ->whereHas('profiles', function($query) {
                $query->whereRaw('TIMESTAMPDIFF(YEAR, user_profiles.birthday, CURDATE()) <= ?', [25]);
            })
            ->with('profiles')
            ->get();
    }

    public function render()
    {
        return view('livewire.youth');
    }
}
