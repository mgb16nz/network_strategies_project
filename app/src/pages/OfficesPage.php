<?php

namespace Strategies\Netstrat;

use SilverStripe\ORM\Connect\MySQLSchemaManager;

use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;

use Page;

class OfficesPage extends Page
{
//    private static $create_table_options = [
//        MySQLSchemaManager::ID => 'ENGINE=MyISAM'
//    ];

    private static $has_many = [
        'Offices' => Office::class,
    ];

    private static $owns = [
        'Offices',
    ];

    private static $table_name = 'OfficesPage';

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldToTab('Root.Offices', GridField::create(
            'Offices',
            'Offices on this pages',
            $this->Offices(),
            GridFieldConfig_RecordEditor::create()
        ));

        return $fields;
    }
}
