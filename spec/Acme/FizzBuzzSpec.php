<?php namespace spec\Acme;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FizzBuzzSpec extends ObjectBehavior {

    function it_translates_1_into_1()
    {
        $this->execute(1)->shouldReturn(1);
    }

    function it_translates_2_into_2()
    {
        $this->execute(2)->shouldReturn(2);
    }

    function it_translates_3_into_fizz()
    {
        $this->execute(3)->shouldReturn('fizz');
    }

    function it_translates_4_into_4()
    {
        $this->execute(4)->shouldReturn(4);
    }

    function it_translates_5_into_buzz()
    {
        $this->execute(5)->shouldReturn('buzz');
    }

    function it_translates_6_into_fizz()
    {
        $this->execute(6)->shouldReturn('fizz');
    }

    function it_translates_7_into_7()
    {
        $this->execute(7)->shouldReturn(7);
    }

    function it_translates_8_into_8()
    {
        $this->execute(8)->shouldReturn(8);
    }

    function it_translates_9_into_fizz()
    {
        $this->execute(9)->shouldReturn('fizz');
    }

    function it_translates_10_into_buzz()
    {
        $this->execute(10)->shouldReturn('buzz');
    }

    function it_translates_11_into_11()
    {
        $this->execute(11)->shouldReturn(11);
    }

    function it_translates_12_into_fizz()
    {
        $this->execute(12)->shouldReturn('fizz');
    }

    function it_translates_13_into_13()
    {
        $this->execute(13)->shouldReturn(13);
    }

    function it_translates_14_into_14()
    {
        $this->execute(14)->shouldReturn(14);
    }

    function it_translates_15_into_fizzbuzz()
    {
        $this->execute(15)->shouldReturn('fizzbuzz');
    }

    function it_translates_a_sequence_of_numbers_correctly()
    {
        $this->executeUpTo(5)->shouldReturn([1, 2, 'fizz', 4, 'buzz']);
    }

//    function it_translates__into_()
//    {
//        $this->execute()->shouldReturn();
//    }
//
//    function it_translates__into_fizz()
//    {
//        $this->execute()->shouldReturn('buzz');
//    }
//
//    function it_translates__into_buzz()
//    {
//        $this->execute()->shouldReturn('buzz');
//    }
//
//    function it_translates__into_fizzbuzz()
//    {
//        $this->execute()->shouldReturn('fizzbuzz');
//    }

}
