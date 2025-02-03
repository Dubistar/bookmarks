<?php

namespace App\Tests;

use ApiPlatform\Symfony\Bundle\Test\ApiTestCase;

class UtilTest extends ApiTestCase
{
    public function testSomething(): void
    {
        $response = static::createClient()->request('GET', '/api/picture_links');

        $this->assertResponseIsSuccessful();
        $this->assertJsonContains(['@id' => '/api/picture_links']);
    }
}
