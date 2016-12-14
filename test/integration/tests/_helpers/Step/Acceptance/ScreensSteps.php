<?php
namespace Step\Acceptance;


class ScreensSteps extends \AcceptanceTester
{

    public function makeMainScreens ($nameScreens, $body) {
        $I = $this;
        $I->seeVisualChanges($nameScreens, $body);

    }

    public function makeComparisonScreens ($nameScreens, $body) {
        $I = $this;
        $I->dontSeeVisualChanges($nameScreens,$body);

    }

}