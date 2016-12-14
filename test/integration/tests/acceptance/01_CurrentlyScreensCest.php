<?php

/**
 * @group currently_main_screens
 */

class CurrentlyScreensCest
{


    public function homeMoreBeer(\AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->seeVisualChanges(\Page\Page::$moreBeer, \Page\Page::$body,'div.product-related');

    }
    public function homeSasrx(\AcceptanceTester $I)
    {
        $I->amOnUrl('https://www.sasrx.com');
        $I->seeVisualChanges(\Page\Page::$sasrx, \Page\Page::$body);
    }
    public function homeGoeveryRoyal(\AcceptanceTester $I)
    {
        $I->amOnUrl('https://goeverywhere.royalrobbins.com/');
        $I->seeVisualChanges(\Page\Page::$goeverywhereRoyal, \Page\Page::$body);
    }
/*
    public function homeDiydecorstore(\AcceptanceTester $I)
    {
        $I->amOnUrl('https://diydecorstore.com');
        $I->seeVisualChanges(\Page\Page::$diydecorstore, \Page\Page::$body);
    }

    public function homeMarco(\AcceptanceTester $I)
    {
        $I->amOnUrl('https://www.marcopromotionalproducts.com');
        $I->seeVisualChanges(\Page\Page::$marco, \Page\Page::$body);
    }

    public function homeBacksplashideas(\AcceptanceTester $I)
    {
        $I->amOnUrl('http://www.backsplashideas.com');
        $I->seeVisualChanges(\Page\Page::$backsplashideas, \Page\Page::$body);
    }

    public function homeGarrettwade(\AcceptanceTester $I)
    {
        $I->amOnUrl('http://www.garrettwade.com');
        $I->seeVisualChanges(\Page\Page::$garrettwade, \Page\Page::$body);
    }

    public function homeGumps(\AcceptanceTester $I)
    {
        $I->amOnUrl('http://www.gumps.com');
        $I->seeVisualChanges(\Page\Page::$gumps, \Page\Page::$body);
    }
    */


    
}