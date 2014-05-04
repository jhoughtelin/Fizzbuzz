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
 * @category  Fizzbuzz
 * @package   Fizzbuzz
 * @author    Josh Houghtelin <Josh@FindSomeHelp.com>
 * @since     2014/05/03
 * @link      http://gitphp.com
 */

class FizzbuzzTest extends PHPUnit_Framework_TestCase {

    public function testCanFizz() {
        $a = new Fizzbuzz();
        $this->assertEquals('Fizz',$a->izFizzBuzz(3));
    }

    public function testCanBuzz() {
        $a = new Fizzbuzz();
        $this->assertEquals('Buzz',$a->izFizzBuzz(5));
    }

    public function testCanFizzBuzz() {
        $a = new Fizzbuzz();
        $this->assertEquals('FizzBuzz',$a->izFizzBuzz(15));
    }

    public function testReturnsArray() {
        $a = new Fizzbuzz();

        $this->assertTrue(is_array($a->run()));
    }

}
