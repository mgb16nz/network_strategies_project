<?php

namespace Strategies\Netstrat;

use SilverStripe\ORM\PaginatedList;
use PageController;

class ArticleHolderController extends PageController
{

    public function PaginatedChildren()
    {
        $list = ArticlePage::get();

        return new PaginatedList($list, $this->request);
    }

//    public function PaginatedChildren()
//    {
//        return PaginatedList::create(
//            $this->articleList,
//            $this->getRequest()
//        );
//    }

}
