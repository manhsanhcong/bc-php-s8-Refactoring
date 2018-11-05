<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 10/27/2018
 * Time: 4:36 PM
 */

class FizzBuzz
{
    public $status;


    public function __construct($number)
    {
        $isFizz = $number % 3 == 0;
        $isBuzz = $number % 5 == 0;

        if ($isFizz && $isBuzz) {
            $this->status = 'FizzBuzz';
        } else if ($isFizz) {
            $this->status = 'Fizz';
        } else if ($isBuzz) {
            $this->status = 'Buzz';
        } else {
            $this->status = $number . "";
        }
    }
}