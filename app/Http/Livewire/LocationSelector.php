<?php

// app/Http/Livewire/LocationSelector.php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Region;
use App\Models\District;
use App\Models\Quarter;

class LocationSelector extends Component
{
    public $regions = [];
    public $districts = [];
    public $quarters = [];
    public $selectedRegion;
    public $selectedDistrict;
    public $selectedVillage;

    public function mount()
    {
        $this->regions = Region::all();
        if (!$this->selectedRegion || $this->selectedRegion == '') {
            $this->districts = [];
            $this->quarters = [];
        }
    }
    
    public function updatedSelectedRegion($selectedRegion)
    {
        if ($selectedRegion && $selectedRegion != '') {
            $this->districts = District::where('region_id', $selectedRegion)->get();
        }    
        return $this->regions;
    }

    public function updatedSelectedDistrict($value)
    {
        if ($value && $value != '') {
            $this->quarters = Quarter::where('district_id',$value)->get();
        }
    }

    public function render()
    {
        return view('livewire.location-selector');
    }
}
?>