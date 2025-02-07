<?php

namespace Chiiya\Passes\Tests\Apple\Components;

use Chiiya\Passes\Apple\Components\WifiNetwork;
use Chiiya\Passes\Tests\Apple\Fixtures\Components;
use Chiiya\Passes\Tests\TestCase;

class WifiNetworkTest extends TestCase
{
    public function test_attributes(): void
    {
        $attributes = Components::wifiNetwork();
        $component = new WifiNetwork($attributes);
        $this->assertSameArray($attributes, $component->toArray());
    }
}
