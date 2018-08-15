<?php

namespace spec\Peesar;

use Peesar\Middleware;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Psr\Http\Server\MiddlewareInterface;

class MiddlewareSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Middleware::class);
    }

    function it_implements_psr_middleware_interface()
    {
        $this->shouldImplement(MiddlewareInterface::class);
    }
}
