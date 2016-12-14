<?php

/**
 * @group test_test
 */

class JsonComCest
{

    protected $file;
    public static $url;
    public static $json;
    public static $name;
    public static $name1;
    public static $name2;

    function _before(AcceptanceTester $I) { // so as _beforeClass
        $this->file = __DIR__ . '/../../../../sites.json';
        $json_data = file_get_contents($this->file);
        self::$json = json_decode($json_data,true);
        self::$name = preg_replace('/^(http[s]?:\/[\/]?)|(www\.)|(\.com)$/','',self::$json['data'][0]['v']);
        self::$name1 = preg_replace('/^(http[s]?:\/[\/]?)|(www\.)|(\.com)$/','',self::$json['data'][1]['v']);
        self::$name2 = preg_replace('/^(http[s]?:\/[\/]?)|(www\.)|(\.com)$/','',self::$json['data'][2]['v']);

    }
    
    public function homeCurrentlyMoreBeer(\Step\Acceptance\ScreensSteps $I)
    {
        $I->amOnUrl(self::$json['data'][0]['v']);
        $I->makeComparisonScreens(self::$name,\Page\Page::$body);
    }

    public function homeCurrentlySasrx(\Step\Acceptance\ScreensSteps $I)
    {
        $I->amOnUrl(self::$json['data'][1]['v']);
        $I->makeComparisonScreens(self::$name1,\Page\Page::$body);
    }

    public function homeCurrentlyGoEveryWhere(\Step\Acceptance\ScreensSteps $I)
    {
        $I->amOnUrl(self::$json['data'][2]['v']);
        $I->makeComparisonScreens(self::$name2,\Page\Page::$body);
    }


}