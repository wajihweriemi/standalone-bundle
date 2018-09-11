<?php declare(strict_types=1);

namespace Acme\StandaloneBundle\Tests\Functional\Controller;

use Acme\StandaloneBundle\Tests\WebTestCase;

/**
 * DefaultControllerTest
 *
 * @author Wajih WERIEMI <wweriemi@ats-digital.com>
 */
class DefaultControllerTest extends WebTestCase
{
    /**
     * Test suits for indexAction
     */
    public function testIndexAction()
    {
        $client = static::createClient();
        $container = $client->getContainer();

        $client->request('GET', '/');

        $this->assertTrue($client->getResponse()->isSuccessful());
    }
}