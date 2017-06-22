<?php

/**
 * Created by PhpStorm.
 * User: datdao
 * Date: 6/4/17
 * Time: 2:33 PM
 * phpunit --bootstrap  phpunitTest/src/Calculator.php  phpunitTest/tests/CalculatorTest.php
 */
//require "phpunitTest/src/Calculator.php";
class CalculatorTest extends PHPUnit_Framework_TestCase
{
    private $calculator;
    protected function setUp(){
        $this->calculator = new Calculator();
    }
    protected function tearDown(){
        unset($this->calculator);
    }
    public function testAdd(){
        $result = $this->calculator->add(1,2);
        $this->assertEquals(3, $result);

        $result = $this->calculator->add(1,23);
        $this->assertEquals(24, $result);

        $result = $this->calculator->add(1,5);
        $this->assertEquals(6, $result);
    }
}