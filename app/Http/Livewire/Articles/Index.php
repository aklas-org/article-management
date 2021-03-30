<?php

namespace App\Http\Livewire\Articles;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search = '';

    public function render()
    {
        return view('livewire.articles.index', [
            'articles' => Article::search($this->search)->latest('id')->paginate(),
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
