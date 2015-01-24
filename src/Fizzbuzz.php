<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * Fizzbuzz.php
 *
 * PHP version 5..5.
 *
 * @category Fizzbuzz
 * @package  SimpleApp
 * @author   Josh Houghtelin <Josh@FindSomeHelp.com>
 * @license  MIT
 * @link     http://gitphp.com
 * @since    2014/05/03
 */

/**
 * Class Fizzbuzz
 *
 * @author   Josh Houghtelin <Josh@FindSomeHelp.com>
 * @package  Fizzbuzz
 * @category SimpleApp
 * @license  MIT
 * @version  Release: @package_version@
 * @link     http://gitphp.com
 * @since    2014/05/03
 */
class Fizzbuzz
{

    private $start = 1;
    private $end = 100;
    protected $results = array();

    /**
     * Class Construct
     *
     * @param int $start
     * @param int $end
     */
    public function __construct($start = 1, $end = 100)
    {
        $this->setStart($start);
        $this->setEnd($end);
    }

    /**
     * setEnd
     *
     * @param $end
     */
    public function setEnd($end)
    {
        $this->end = $end;
    }

    /**
     * setStart
     *
     * @param $start
     */
    public function setStart($start)
    {
        $this->start = $start;
    }

    /**
     * Run the Fizzbuzz process
     *
     * @return array
     */
    public function run()
    {
        $counter = $this->start;

        while ($counter <= $this->end) {
            $this->results[$counter] = $this->izFizzBuzz($counter);
            $counter ++;
        }

        return $this->results;
    }

    /**
     * Check if a value is to be returned as fizz/buzz/fizzbuzz or itself.
     *
     * @param $number
     *
     * @return string
     */
    public function izFizzBuzz($number)
    {
        if (($number % 3 == 0) && ($number % 5 == 0)) {
            return "FizzBuzz";
        }

        if ($number % 3 == 0) {
            return "Fizz";
        }

        if ($number % 5 == 0) {
            return "Buzz";
        }

        return $number;
    }
}
