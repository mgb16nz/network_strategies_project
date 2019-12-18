<?php

namespace Strategies\Netstrat;

use PageController;

class WorkshopPageController extends PageController
{

    public function LatestWorkshops($count = 3)
    {
        return WorkshopPage::get()
            ->sort('Date', 'DESC')
            ->limit($count);
    }

}
