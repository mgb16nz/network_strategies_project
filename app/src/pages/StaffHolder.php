<?php

namespace Strategies\Netstrat;

use SilverStripe\ORM\Connect\MySQLSchemaManager;

use SilverStripe\Assets\Image;
use SilverStripe\AssetAdmin\Forms\UploadField;

use Page;

class StaffHolder extends Page
{

    private static $db = [];

//    private static $create_table_options = [
//        MySQLSchemaManager::ID => 'ENGINE=MyISAM'
//    ];

    private static $has_one = [
        'Photo' => Image::class
    ];

    private static $allowed_children = [
        StaffPage::class
    ];

    private static $owns = [
        'Photo',
    ];

    private static $table_name = 'StaffHolder';


    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldToTab("Root.Images", $photo = UploadField::create('Photo','Maximum image size 2MB'));

        $photo->getValidator()->setAllowedExtensions(['png','gif','jpg','jpeg']);

        $sizeMB = 2; // 2 MB
            $size = $sizeMB * 1024 * 1024; // 2 MB in bytes
            $photo->getValidator()->setAllowedMaxFileSize($size);

        return $fields;
    }
}
