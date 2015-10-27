<?php

namespace spec\Acme;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class JosephusSpec extends ObjectBehavior
{
    function it_should_return_6_for_8_and_4()
    {
        $this->untested(8, 4)->shouldReturn(6);
    }

    function it_should_return_31_for_41_and_3()
    {
        $this->untested(41, 3)->shouldReturn(31);
    }

    function it_should_return_1_for_6_and_3()
    {
        $this->untested(6, 3)->shouldReturn(1);
    }

    function it_should_return_8_for_9_and_5()
    {
        $this->untested(9, 5)->shouldReturn(8);
    }

    function it_should_return_1_for_15_and_5()
    {
        $this->untested(15, 5)->shouldReturn(1);
    }

    function it_should_return_2_for_7_and_4()
    {
        $this->untested(7, 4)->shouldReturn(2);
    }
}
