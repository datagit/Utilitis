<?php

/**
 * Created by PhpStorm.
 * User: datdao
 * Date: 6/4/17
 * Time: 3:04 PM
 * @doc: https://www.startutorial.com/articles/view/phpunit-beginner-part-1-get-started
 * phpunit --bootstrap  phpunitTest/src/Calculator.php  phpunitTest/tests/CalculatorTestUseDataProvider.php
 */
//require "phpunitTest/src/Calculator.php";
class CalculatorTestUseDataProvider extends PHPUnit_Framework_TestCase
{
    private $calculator;
    public function setUp(){
        $this->calculator = new Calculator();

    }
    public function tearDown(){
        unset($this->calculator);
    }

    //must public method
    /**
     * @return array
     */
    public function addDataProvider(){
        //agrument1, agrument2, expected
        return array(
            array(1,2,3),
            array(2,2,4),
            array(0,0,1),
        );
    }

    //using annotation => @dataProvider addDataProvider
    /**
     * @param $a
     * @param $b
     * @param $expected
     * @dataProvider addDataProvider
     */
    public function testAdd($a, $b, $expected){
        $actual = $this->calculator->add($a, $b);
        $this->assertEquals($expected, $actual);

    }
}