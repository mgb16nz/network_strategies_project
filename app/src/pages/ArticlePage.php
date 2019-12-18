<?php

namespace Strategies\Netstrat;

use SilverStripe\ORM\Connect\MySQLSchemaManager;

use SilverStripe\Forms\TextField;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\DateField;

use SilverStripe\Assets\Image;
use SilverStripe\AssetAdmin\Forms\UploadField;

use Page;

class ArticlePage extends Page
{
    private static $can_be_root = false;

    private static $db = [
        'Date' => 'Date',
        'Teaser' => 'Text',
        'Pullquote' => 'Text',
//        'Author' => 'Varchar',
        'Email' => 'Varchar',
        'Writer' => 'Varchar'
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

    private static $table_name = 'ArticlePage';

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldToTab('Root.Main', DateField::create('Date','Date of article'),'Content');
        $fields->addFieldToTab('Root.Main', TextareaField::create('Teaser'),'Content');
        $fields->addFieldToTab('Root.Main', TextareaField::create('Pullquote'),'Content');
//        $fields->addFieldToTab('Root.Main', TextField::create('Author','Contact person'),'Content');
        $fields->addFieldToTab('Root.Main', TextField::create('Writer','Contact person'),'Content');
        $fields->addFieldToTab('Root.Main', TextField::create('Email','Contact email'),'Content');

        $fields->addFieldToTab('Root.Attachments', $photo = UploadField::create('Photo','Maximum image size 2MB'));

        $photo->setFolderName('articles')
            ->getValidator()->setAllowedExtensions(['png','gif','jpg','jpeg']);

        $sizeMB = 2; // 2 MB
        $size = $sizeMB * 1024 * 1024; // 2 MB in bytes
        $photo->getValidator()->setAllowedMaxFileSize($size);

        return $fields;
    }
}


