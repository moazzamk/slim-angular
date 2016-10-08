<?php

namespace App\Action;

use App\Exception\BadRequestException;

class FindPrimeNumbersAction
{
    /**
     * @param int $number
     *
     * @return array
     * @throws BadRequestException
     */
    public function run($number)
    {
        if (empty($number) || !is_numeric($number)) {
            throw new BadRequestException('Please provide a number greater than zero');
        }

        $ret = [];
        for ($i = 1; $i <= $number; ++$i) {
            if ($this->isPrime($i)) {
                $ret[] = $i;
            }
        }

        return $ret;
    }

    /**
     * @param int  $number
     *
     * @return bool
     */
    private function isPrime($number)
    {
        if ($number == 1) {
            return false;
        }
        if ($number == 2) {
            return true;
        }
        if ($number % 2 == 0) {
            return false;
        }
        for ($i = 3; $i <= ceil(sqrt($number)); $i += 2) {
            if ($number % $i == 0) {
                return false;
            }
        }

        return true;
    }
}
