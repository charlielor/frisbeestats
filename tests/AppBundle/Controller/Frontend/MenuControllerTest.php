<?php
namespace Tests\AppBundle\Controller\FrontEnd;


use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MenuControllerTest extends WebTestCase {
    public function testRoute() {
        $client = static::createClient();

        $client->request('GET', '/');

        // Testing response code for /menu
        $this->assertTrue($client->getResponse()->isSuccessful());
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}