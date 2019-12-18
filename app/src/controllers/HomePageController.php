<?php

namespace Strategies\Netstrat;

use PageController;

class HomePageController extends PageController
{

    public function LatestArticles($count = 3)
    {
        return ArticlePage::get()
            ->sort('Date', 'DESC')
            ->limit($count);
    }

    public function LatestNews($count = 3)
    {
        return NewsPage::get()
            ->sort('Date', 'DESC')
            ->limit($count);
    }


}