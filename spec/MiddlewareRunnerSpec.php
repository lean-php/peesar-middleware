<?php

namespace spec\Peesar;

use Peesar\MiddlewareRunner;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Psr\Http\Server\RequestHandlerInterface;

class MiddlewareRunnerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(MiddlewareRunner::class);
    }

    function it_is_a_request_handler()
    {
        $this->shouldImplement(RequestHandlerInterface::class);
    }
}
