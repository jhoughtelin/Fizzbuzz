<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * FizzbuzzTest.php
 *
 * PHP version 5..5.
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unableå to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category  TEST
 * @package   PHPUnit
 * @author    Josh Houghtelin <Josh@FindSomeHelp.com>
 * @link      http://gitphp.com
 * @since     2014/05/03
 */

/**
 * Class FizzbuzzTest
 *
 * @author   Josh Houghtelin <Josh@FindSomeHelp.com>
 * @package  PHPUnit
 * @category TEST
 * @license  MIT
 * @version  Release: @package_version@
 * @link     http://gitphp.com
 * @since    2014/05/03
 */
class FizzbuzzTest extends PHPUnit_Framework_TestCase
{

    public function testCanFizz()
    {
        $a = new Fizzbuzz();
        $this->assertEquals('Fizz', $a->izFizzBuzz(3));
    }

    public function testCanBuzz()
    {
        $a = new Fizzbuzz();
        $this->assertEquals('Buzz', $a->izFizzBuzz(5));
    }

    public function testCanFizzBuzz()
    {
        $a = new Fizzbuzz();
        $this->assertEquals('FizzBuzz', $a->izFizzBuzz(15));
    }

    public function testReturnsArray()
    {
        $a = new Fizzbuzz();

        $this->assertTrue(is_array($a->run()));
    }
}
