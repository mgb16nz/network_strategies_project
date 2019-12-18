<?php

namespace Strategies\Netstrat;

use SilverStripe\ORM\Connect\MySQLSchemaManager;

use SilverStripe\Forms\DateField;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\TextareaField;

use SilverStripe\Assets\Image;
use SilverStripe\AssetAdmin\Forms\UploadField;

use Page;

class NewsPage extends Page
{
    private static $can_be_root = false;

    private static $db = [
        'SubHead' => 'Text',
        'Date' => 'Date',
        'Location' => 'Varchar'
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

    private static $table_name = 'NewsPage';

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldToTab('Root.Main', TextareaField::create('SubHead'),'Content');
        $fields->addFieldToTab('Root.Main', DateField::create('Date','Date of article'),'Content');
        $fields->addFieldToTab('Root.Main', TextField::create('Location'),'Content');
        $fields->addFieldToTab('Root.Attachments', $photo = UploadField::create('Photo','Maximum image size 2MB'));

        $photo->setFolderName('news')
            ->getValidator()->setAllowedExtensions(['png','gif','jpg','jpeg']);

        $sizeMB = 2; // 2 MB
        $size = $sizeMB * 1024 * 1024; // 2 MB in bytes
        $photo->getValidator()->setAllowedMaxFileSize($size);

        return $fields;
    }
}
