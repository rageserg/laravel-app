<?php

namespace App\Services;
use App\Models\Article;

class ArticleService
{
    public function getArticleBySlug($request)
    {
        $slug = $request->get('slug');
        return Article::findBySlug($slug);
    }
}
