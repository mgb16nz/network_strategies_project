<?php

namespace Strategies\Netstrat;

use PageController;

class NewsPageController extends PageController
{

    public function LatestArticles($count = 3)
    {
        return NewsPage::get()
            ->sort('Date', 'DESC')
            ->limit($count);
    }

}