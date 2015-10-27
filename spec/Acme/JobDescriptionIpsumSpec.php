<?php

namespace spec\Acme;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class JobDescriptionIpsumSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Acme\JobDescriptionIpsum');
    }

    function it_should_have_an_array_of_words()
    {
        $this->words->shouldBeArray();
    }

    function it_should_have_a_word_function()
    {
        $this->word()->shouldBeString();
    }

    function it_should_have_a_words_function()
    {
        $this->words(1)->shouldBeString();
    }

    function it_should_have_a_sentence_function()
    {
        $this->sentence()->shouldBeString();
    }
}
