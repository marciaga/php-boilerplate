<?php

use Arciaga\Controllers\Homepage as Homepage;

class HomepageTest extends \Codeception\Test\Unit
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

    public function testCustomThing()
    {

        $this->assertEquals(true, true);
    }
}
