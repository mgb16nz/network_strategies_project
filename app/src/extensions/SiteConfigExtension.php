<?php

namespace Strategies\Netstrat;

use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\ORM\DataExtension;
use SilverStripe\ORM\Connect\MySQLSchemaManager;



class SiteConfigExtension extends DataExtension
{
    private static $create_table_options = [
        MySQLSchemaManager::ID => 'ENGINE=MyISAM'
    ];
}