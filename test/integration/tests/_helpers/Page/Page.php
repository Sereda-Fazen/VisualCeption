<?php
namespace Page;

class Page
{

    public static $body = 'body';

    
    protected $tester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }



}
