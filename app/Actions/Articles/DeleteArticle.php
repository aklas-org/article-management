<?php

namespace App\Actions\Articles;

use App\Models\Article;

class DeleteArticle
{
    public function delete(Article $article)
    {
        $article->delete();
    }
}
