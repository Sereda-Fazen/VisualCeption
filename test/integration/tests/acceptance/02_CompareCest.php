<?php

/**
 * @group comparison_screens
 */

class CompareCest
{

    public function homeMoreBeer(\AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->dontSeeVisualChanges(\Page\Page::$moreBeer, \Page\Page::$body, 'div.product-related');
    }
    public function homeSasrx(\AcceptanceTester $I)
    {
        $I->amOnUrl('https://www.sasrx.com');
        $I->dontSeeVisualChanges(\Page\Page::$sasrx, \Page\Page::$body);
    }
    public function homeGoeveryRoyal(\AcceptanceTester $I)
    {
        $I->amOnUrl('https://goeverywhere.royalrobbins.com/');
        $I->dontSeeVisualChanges(\Page\Page::$goeverywhereRoyal, \Page\Page::$body);
    }
/*
    public function homeDiydecorstore(\AcceptanceTester $I)
    {
        $I->amOnUrl('https://diydecorstore.com');
        $I->dontSeeVisualChanges(\Page\Page::$diydecorstore, \Page\Page::$body);
    }

    public function homeMarco(\AcceptanceTester $I)
    {
        $I->amOnUrl('https://www.marcopromotionalproducts.com');
        $I->dontSeeVisualChanges(\Page\Page::$marco, \Page\Page::$body);
    }

    public function homeBacksplashideas(\AcceptanceTester $I)
    {
        $I->amOnUrl('http://www.backsplashideas.com');
        $I->dontSeeVisualChanges(\Page\Page::$backsplashideas, \Page\Page::$body);
    }

    public function homeGarrettwade(\AcceptanceTester $I)
    {
        $I->amOnUrl('http://www.garrettwade.com');
        $I->dontSeeVisualChanges(\Page\Page::$garrettwade, \Page\Page::$body);
    }

    public function homeGumps(\AcceptanceTester $I)
    {
        $I->amOnUrl('http://www.gumps.com');
        $I->dontSeeVisualChanges(\Page\Page::$gumps, \Page\Page::$body);
    }
*/
    
}