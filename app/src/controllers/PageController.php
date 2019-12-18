<?php

use SilverStripe\CMS\Controllers\ContentController;
use SilverStripe\ORM\DataObject;
use SilverStripe\View\Requirements;

class PageController extends ContentController
{
    /**
     * An array of actions that can be accessed via a request. Each array element should be an action name, and the
     * permissions or conditions required to allow the user to access it.
     *
     * <src>
     * array (
     *     'action', // anyone can access this action
     *     'action' => true, // same as above
     *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
     *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
     * );
     * </src>
     *
     * @var array
     */
    private static $allowed_actions = array(
    );

    public function init()
    {
        parent::init();
        // You can include any CSS or JS required by your project here.
        // See: http://doc.silverstripe.org/framework/en/reference/requirements

        // Requirements for CSS
        Requirements::css('css/editor.css');
        Requirements::css('css/reset.css');
        Requirements::css('css/typography.css');
        Requirements::css('css/form.css');
        Requirements::css('css/layout.css');
        Requirements::css('css/flexslider.css');

        // Requirements for JS
        Requirements::javascript('//code.jquery.com/jquery-3.3.1.min.js');
        Requirements::javascript('javascript/script.js');
        Requirements::javascript('javascript/flexslider.js');

    }

    public function PageByID($pageID = 0) {
        return DataObject::get_by_id('SiteTree', $pageID);
    }
}

