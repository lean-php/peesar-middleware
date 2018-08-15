<?php

namespace spec\Peesar;

use Peesar\Middleware;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MiddlewareSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Middleware::class);
    }
}
