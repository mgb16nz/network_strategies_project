<?php

namespace Strategies\Netstrat;

use SilverStripe\ORM\Connect\MySQLSchemaManager;

use SilverStripe\Forms\TextField;
use SilverStripe\Forms\TextareaField;

use SilverStripe\Assets\Image;
use SilverStripe\AssetAdmin\Forms\UploadField;

use Page;

class WorkshopPage extends Page
{
    private static $can_be_root = false;

    private static $db = [
        'Objective' => 'Text',
        'Target' => 'Text',
        'Duration' => 'Varchar',
        'Cost' => 'Text',
        'Email' => 'Varchar',
        'Phone' => 'Varchar'
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

    private static $table_name = 'WorkshopPage';

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldToTab('Root.Main', TextareaField::create('Objective'),'Content');
        $fields->addFieldToTab('Root.Main', TextareaField::create('Target','Target audience'),'Content');
        $fields->addFieldToTab('Root.Main', TextField::create('Duration'),'Content');
        $fields->addFieldToTab('Root.Main', TextareaField::create('Cost'),'Content');
        $fields->addFieldToTab('Root.Main', TextField::create('Email','Contact email'),'Content');
        $fields->addFieldToTab('Root.Main', TextField::create('Phone','Contact phone'),'Content');

        $fields->addFieldToTab('Root.Attachments', $photo = UploadField::create('Photo','Maximum image size 2MB'));

        $photo->getValidator()->setAllowedExtensions(['png','gif','jpg','jpeg']);

        $sizeMB = 2; // 2 MB
        $size = $sizeMB * 1024 * 1024; // 2 MB in bytes
        $photo->getValidator()->setAllowedMaxFileSize($size);

        return $fields;
    }
}
