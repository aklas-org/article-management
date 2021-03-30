<?php

namespace App\Actions\Articles;

use App\Models\Article;
use Illuminate\Support\Facades\Validator;

class UpdateArticle
{
    public function update($input, Article $article)
    {
        $data = Validator::make($input, [
            'title' => ['required', 'string', 'max:255'],
            'writer' => ['required', 'string'],
            'content' => ['required', 'string', 'max:255'],
        ], [], [
            'title' => 'Title',
            'writer' => 'Writer',
            'content' => 'Content',
        ])->validate();

        $article->update($input);

        $article->refresh();

        return $article;
    }
}
