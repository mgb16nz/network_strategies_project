<?php

namespace Strategies\Netstrat;

use PageController;

class ArticlePageController extends PageController
{

    public function LatestArticles($count = 3)
    {
        return ArticlePage::get()
            ->sort('Date', 'DESC')
            ->limit($count);
    }

}