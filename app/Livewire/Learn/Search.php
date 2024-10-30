<?php

namespace App\Livewire\Learn;

use App\Models\Article;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Search extends Component
{
    #[Validate('required')]
    public string $searchText = '';

    public $resultSearch = [];

    public function updatedSearchText($value)
    {
        $this->reset('resultSearch');

        $this->validate();

        $searchTerm = "%{$value}%";

        $this->resultSearch = Article::where('title', 'LIKE', $searchTerm)->get();
    }

    public function clearSearch()
    {
        $this->reset('searchText', 'resultSearch');
    }

    public function render()
    {
        return view('livewire.learn.search');
    }
}
