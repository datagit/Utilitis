<?php

/**
 * Created by PhpStorm.
 * User: datdao
 * Date: 6/4/17
 * Time: 3:32 PM
 * http://www.webtipblog.com/unit-testing-private-methods-and-properties-with-phpunit/
 * phpunit --bootstrap  phpunitTest/src/ClassHasPrivateMethods.php  phpunitTest/tests/ClassHasPrivateMethodsTest.php
 */
//require 'phpunitTest/src/ClassHasPrivateMethods.php';
class ClassHasPrivateMethodsTest extends PHPUnit_Framework_TestCase
{
    public function testBar(){
        $number = 1;
        $object = new ClassHasPrivateMethods();
        $reflector = new ReflectionClass("ClassHasPrivateMethods");
        $method = $reflector->getMethod('bar');
        $method->setAccessible(true);

        $result = $method->invokeArgs( $object, array( $number ) );
        $this->assertEquals( 1, $result ); // whatever your assertion is
    }
}