<?php namespace Acme;

class PrimeFactors {

    public function generate($number)
    {
        $primes = [];

        for ($candidate = 2; 1 < $number; $candidate += 1) {
            for (; $number % $candidate == 0; $number /= $candidate) {
                $primes[] = $candidate;
            }
        }

        return $primes;
    }
}
