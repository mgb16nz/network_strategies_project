<?php

namespace Strategies\Netstrat;

use SilverStripe\ORM\Connect\MySQLSchemaManager;

use Page;

class ArticleHolder extends Page
{
//    private static $create_table_options = [
//        MySQLSchemaManager::ID => 'ENGINE=MyISAM'
//    ];

    private static $allowed_children = [
 	    ArticlePage::class
    ];
}


