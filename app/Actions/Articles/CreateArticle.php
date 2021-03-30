<?php

namespace App\Actions\Articles;

use App\Models\Article;
use Illuminate\Support\Facades\Validator;

class CreateArticle
{
    public function create($input)
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

        $article = Article::create($input);

        return $article;
    }
}
