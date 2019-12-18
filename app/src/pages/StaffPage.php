<?php

namespace Strategies\Netstrat;

use SilverStripe\ORM\Connect\MySQLSchemaManager;

use SilverStripe\Forms\TextField;

use SilverStripe\Assets\Image;
use SilverStripe\AssetAdmin\Forms\UploadField;

use Page;

class StaffPage extends Page
{
    private static $can_be_root = false;

    private static $db = [
        'Position' => 'Varchar',
        'Email' => 'Varchar',
    ];

//    private static $create_table_options = [
//        MySQLSchemaManager::ID => 'ENGINE=MyISAM'
//    ];

    private static $has_one = [
        'Photo' => Image::class,
    ];

    private static $owns = [
        'Photo',
    ];

    private static $table_name = 'StaffPage';

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldToTab('Root.Main', TextField::create('Position'),'Content');
        $fields->addFieldToTab('Root.Main', TextField::create('Email','Email address'),'Content');

        $fields->addFieldToTab('Root.Main', TextField::create('Author','Author of article'),'Content');

        $fields->addFieldToTab("Root.Images", $photo = UploadField::create('Photo'));

        $photo->setFolderName('staff')
            ->getValidator()->setAllowedExtensions(['png','gif','jpg','jpeg']);

        $sizeMB = 2; // 2 MB
        $size = $sizeMB * 1024 * 1024; // 2 MB in bytes
        $photo->getValidator()->setAllowedMaxFileSize($size);

        return $fields;
    }
}

