<?php declare(strict_types=1);

namespace Acme\StandaloneBundle\Tests\Unit\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Acme\StandaloneBundle\Controller\DefaultController;
use PHPUnit\Framework\TestCase;

/**
 * DefaultControllerTest
 *
 * @author Wajih WERIEMI <wweriemi@ats-digital.com>
 */
class DefaultControllerTest extends TestCase
{
    /**
     * Test suits for indexAction
     *
     * @covers Acme\StandaloneBundle\Controller\DefaultController::indexAction
     */
    public function testIndexAction()
    {
        $controller = new DefaultController();
        $this->assertInstanceOf(JsonResponse::class, $controller->indexAction());
    }
}
