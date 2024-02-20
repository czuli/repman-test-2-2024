<?php

namespace Czuli\SuperToolsTest2;

class Math
{
    /**
     * Adds two numbers.
     *
     * @param float $a The first number
     * @param float $b The second number
     * @return float The sum of $a and $b
     */
    public function add($a, $b)
    {
        return $a + $b;
    }

    /**
     * Subtracts one number from another.
     *
     * @param float $a The number to subtract from
     * @param float $b The number to subtract
     * @return float The difference between $a and $b
     */
    public function subtract($a, $b)
    {
        return $a - $b;
    }

    /**
     * Multiplies two numbers.
     *
     * @param float $a The first number
     * @param float $b The second number
     * @return float The product of $a and $b
     */
    public function multiply($a, $b)
    {
        return $a * $b;
    }

    /**
     * Divides one number by another.
     *
     * @param float $a The number to be divided
     * @param float $b The number to divide by
     * @return float|false The quotient of $a and $b, or false if $b is 0
     */
    public function divide($a, $b)
    {
        if ($b == 0) {
            return false; // cannot divide by 0
        }

        return $a / $b;
    }
    /**
     * Calculates the average of two numbers.
     *
     * @param float $a The first number
     * @param float $b The second number
     * @return float The average of $a and $b
     */
    public function average($a, $b)
    {
        return ($a + $b) / 2;
    }

    /**
     * Squares a number.
     *
     * @param float $a The number to square
     * @return float The square of $a
     */
    public function square($a)
    {
        return $a * $a;
    }

    /**
     * Calculates the square root of a number.
     *
     * @param float $a The number to calculate the square root of
     * @return float|false The square root of $a or false if $a is negative
     */
    public function squareRoot($a)
    {
        if ($a < 0) {
            return false; // cannot calculate square root of a negative number
        }

        return sqrt($a);
    }

    /**
     * Calculates the percentage of one number of another.
     *
     * @param float $a The percentage
     * @param float $b The whole from which the percentage is calculated
     * @return float What percentage $a is of $b
     */
    public function percentage($a, $b)
    {
        return ($a / 100) * $b;
    }
}
