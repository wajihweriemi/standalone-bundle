<?php declare(strict_types=1);

namespace Acme\StandaloneBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

/**
 * Default Controller
 *
 * @author Wajih WERIEMI <wweriemi@ats-digital.com>
 */
class DefaultController extends Controller
{
    /**
     * Index action
     *
     * @return Response
     */
    public function indexAction()
    {
        return new JsonResponse(['foo' => 'bar']);
    }
}
