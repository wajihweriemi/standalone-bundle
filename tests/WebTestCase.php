<?php declare(strict_types=1);

namespace Acme\StandaloneBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase as BaseWebTestCase;

/**
 * WebTestCase
 *
 * @author Wajih WERIEMI <wweriemi@ats-digital.com>
 */
abstract class WebTestCase extends BaseWebTestCase
{
	/**
	 * {@inheritDoc}
	 */
    protected static function getKernelClass()
    {
        return 'Acme\StandaloneBundle\App\AppKernel';
    }
}
