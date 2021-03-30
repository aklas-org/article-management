<?php

namespace App\Http\Livewire\Articles;

use App\Actions\Articles\DeleteArticle;
use App\Actions\Articles\UpdateArticle;
use App\Models\Article;
use Livewire\Component;

class Show extends Component
{
    public $articleId;

    public $input;

    public function getArticleProperty()
    {
        return Article::findOrFail($this->articleId);
    }

    public function render()
    {
        return view('livewire.articles.show');
    }

    public function mount($id)
    {
        $this->articleId = $id;

        $this->input = $this->article->only(['title', 'writer', 'content']);
    }

    public function update(UpdateArticle $action)
    {
        $action->update($this->input, $this->article);

        session()->flash('flash.banner', 'Article has been updated.');

        return redirect(route('articles.index'));
    }

    public function delete(DeleteArticle $action)
    {
        $action->delete($this->article);

        session()->flash('flash.banner', 'Article has been deleted.');

        return redirect(route('articles.index'));
    }
}
