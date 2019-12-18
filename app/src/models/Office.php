<?php

namespace Strategies\Netstrat;

use SilverStripe\ORM\DataObject;

use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\TextareaField;

use SilverStripe\Assets\Image;
use SilverStripe\AssetAdmin\Forms\UploadField;

use SilverStripe\Versioned\Versioned;

class Office extends DataObject
{

    private static $can_be_root = false;

    private static $db = [
	'Title' => 'Varchar',
	'Address' => 'Text',
	'Phone' => 'Varchar',
	'Fax' => 'Varchar',
	'Email' => 'Varchar',
	'Manager' => 'Varchar'
    ];

//    private static $create_table_options = [
//        MySQLSchemaManager::ID => 'ENGINE=MyISAM'
//    ];

    private static $has_one = [
    'Photo' => Image::class,
	'OfficesPage' => OfficesPage::class,
    ];

    private static $summary_fields = [
        'GridThumbnail' => '',
        'Title' => 'Office name',
    ];

    private static $owns = [
        'Photo',
    ];

    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'Office';

    public function getGridThumbnail()
    {
        if($this->Photo()->exists()) {
            return $this->Photo()->ScaleWidth(100);
        }
        return "(no image)";
    }

    public function getCMSFields()
    {
        $fields = FieldList::create(
            TextField::create('Title'),
            TextareaField::create('Address'),
            TextField::create('Phone'),
            TextField::create('Fax'),
            TextField::create('Email'),
            Textfield::create('Manager'),

            $uploader = UploadField::create('Photo')
            );

            $uploader->setFolderName('office-photos');
            $uploader->getValidator()
                ->setAllowedExtensions(['png','gif','jpeg','jpg']);

        return $fields;
    }
}
