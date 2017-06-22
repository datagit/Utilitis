<?php

/**
 * Created by PhpStorm.
 * User: datdao
 * Date: 6/13/17
 * Time: 5:36 AM
 */
class DoubleTest extends PHPUnit_Framework_TestCase
{
    public function testWithStub()
    {
        // Create a stub for the Calculator class.
        $calculator = $this->getMockBuilder('Calculator')
            ->getMock();

        // Configure the stub.
        $calculator->expects($this->any())
            ->method('add')
            ->will($this->returnValue(6));
        var_dump($calculator->add(100,100));
        $this->assertEquals(5, $calculator->add(100,100));
    }
}