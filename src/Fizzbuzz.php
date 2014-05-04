<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * Fizzbuzz.php
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

/**
 * Class Fizzbuzz
 *
 * @author    Josh Houghtelin <Josh@FindSomeHelp.com>
 * @version   Release: @package_version@
 * @since     2014/05/03
 */
class Fizzbuzz {

    private $_start = 1;
    private $_end = 100;
    protected $results = array();

    public function __construct ($start = 1, $end = 100 ) {
        $this->setStart($start);
        $this->setEnd($end);
    }

    public function setEnd ($end) {
        $this->_end = $end;
    }

    public function setStart ($start) {
        $this->_start = $start;
    }

    public function run() {
        $counter = $this->_start;

        while($counter <= $this->_end) {
            $this->results[$counter] = $this->izFizzBuzz($counter);
            $counter++;
        }

        return $this->results;
    }

    public function izFizzBuzz($number) {
        if(($number%3 == 0) && ($number%5 == 0)){
            return "FizzBuzz";
        } elseif ($number%3 == 0) {
            return "Fizz";
        } elseif ($number%5 == 0) {
            return "Buzz";
        } else {
            return $number;
        }
    }
}