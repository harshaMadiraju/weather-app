<?php

namespace App\Http\Livewire;

use App\Models\cities;
use Livewire\Component;

class Search extends Component
{
    public $searchTerm;
    public $cities;

    public function render()
    {
        $searchTerm = $this->searchTerm . '%';

        if (strlen($this->searchTerm)) {
            $this->cities = cities::where('city_ascii', 'like', $searchTerm)->get();
        }

        return view('livewire.search');
    }
}
