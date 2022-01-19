<?php

namespace App\Http\Livewire;

use App\Models\Country;
use Livewire\Component;

class Home extends Component
{
    public $country_id;
    public $city_id;
    public $countries;

    public function mount()
    {
        $this->countries = Country::all();
    }

    public function render()
    {
        return view('livewire.home');
    }
}
