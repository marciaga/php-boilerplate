<?php

use ViewHelpers\Helper as Helper;

class HelpersTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testDoSomethingUseful()
    {
        $result = Helper::doSomethingUseful();

        $this->assertEquals($result, true);
    }
}
