<?php

namespace Acme;

class Josephus
{
    public function untested($count, $n)
    {
        $circle = range(1, $count);
        $remove = $n - 1;

        while ($count > 1) {
            unset($circle[$remove]);
            $remove += $n;

            while ($remove >= $count) {
                $remove = $remove - $count;
                $count = count($circle);
                sort($circle);
            }
        }

        return current($circle);
    }
}
