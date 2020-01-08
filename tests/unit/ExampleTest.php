<?php

namespace Bedard\Example\Tests\Unit;

use Bedard\Example\Tests\PluginTestCase;
use Model;

class ExampleTest extends PluginTestCase
{
    public function test_creating_a_model()
    {
        $user = factory(Model::class)->make([
            'email' => 'foo@bar.com',
        ]);

        $this->assertEquals('foo@bar.com', $user->email);
    }
}
