<?php namespace Acme;

use \InvalidArgumentException;

class StringCalculator {

    const MAX_NUMBER_ALLOWED = 1000;

    public function add($numbers)
    {
        $numbers = $this->parseNumbers($numbers);

        return array_sum(array_map(function($number){
            $this->guardAgainstInvalidNumber($number);

            if ($number >= self::MAX_NUMBER_ALLOWED) {
                return 0;
            }

            return $number;
        }, $numbers));
    }

    /**
     * @param $number
     */
    private function guardAgainstInvalidNumber($number)
    {
        if ($number < 0) {
            throw new InvalidArgumentException(
                "Invalid number provided: {$number}"
            );
        }
    }

    /**
     * @param $numbers
     *
     * @return array
     */
    private function parseNumbers($numbers)
    {
        return array_map('intval', preg_split('/\s*(,|\\\n)\s*/', $numbers));
    }
}
