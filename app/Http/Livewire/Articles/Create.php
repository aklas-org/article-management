<?php

namespace App\Http\Livewire\Articles;

use App\Actions\Articles\CreateArticle;
use Livewire\Component;

class Create extends Component
{
    public $input = [];

    public function render()
    {
        return view('livewire.articles.create');
    }

    public function create(CreateArticle $action)
    {
        $action->create($this->input);

        session()->flash('flash.banner', 'Article has been created.');

        return redirect(route('articles.index'));
    }
}
