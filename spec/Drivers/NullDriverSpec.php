<?php

namespace spec\Matthewbdaly\SMS\Drivers;

use Matthewbdaly\SMS\Drivers\NullDriver;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Psr7\Response as GuzzleResponse;

class NullDriverSpec extends ObjectBehavior
{
    function let(GuzzleClient $client, GuzzleResponse $response)
    {
        $this->beConstructedWith($client, $response);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(NullDriver::class);
    }

    function it_implements_interface()
    {
        $this->shouldImplement('Matthewbdaly\SMS\Contracts\Driver');
    }
}
