<?php

namespace Chiiya\Passes\Google\Responses;

use Chiiya\Passes\Common\Component;
use Chiiya\Passes\Google\Passes\EventTicketClass;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

class EventTicketClassesResponse extends Component
{
    use HasPagination;

    #[CastWith(ArrayCaster::class, EventTicketClass::class)]
    public array $resources = [];
}
