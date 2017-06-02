<?php

/**
 * Created by PhpStorm.
 * User: datdao
 * Date: 6/3/17
 * Time: 5:55 AM
 */
use PHPUnit\Framework\TestCase;

/**
 * @covers Email
 */
final class EmailTest extends TestCase
{
//    public function testCanBeCreatedFromValidEmailAddress()
//    {
//        $this->assertInstanceOf(
//            Email::class,
//            Email::fromString('user@example.com')
//        );
//    }

    public function testCannotBeCreatedFromInvalidEmailAddress()
    {

                $this->expectException(InvalidArgumentException::class);
        Email::fromString('invalid_email_format');
        var_dump(InvalidArgumentException::class);

    }

//    public function testCanBeUsedAsString()
//    {
//        $this->assertEquals(
//            'user@example.com',
//            Email::fromString('user@example.com')
//        );
//    }
}

//https://phpunit.de/getting-started.html
//phpunit --bootstrap Email.php tests/EmailTest
//phpunit --bootstrap Email.php --testdox tests