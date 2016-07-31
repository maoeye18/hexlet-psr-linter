<?php

namespace PSRLinter;

class ExampleTest extends \PHPUnit_Framework_TestCase
{
    public function testGetSetNum()
    {
        $initNum = 0;
        $testNum = 42;

        $example = new Example();
        $this->assertEquals($initNum, $example->getNum());

        $example->setNum($testNum);
        $this->assertEquals($testNum, $example->getNum());
    }
}
