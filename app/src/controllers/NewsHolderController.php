<?php

namespace Strategies\Netstrat;

use PageController;
use SilverStripe\ORM\PaginatedList;

class NewsHolderController extends PageController
{
    public function PaginatedChildren()
    {
        $list = NewsPage::get();

        return new PaginatedList($list, $this->request);
    }

//    public function PaginatedChildren() {
//        return new PaginatedList($this->Children(), $this->request);
//    }



}