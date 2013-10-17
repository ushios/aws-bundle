<?php

namespace Ushios\Bundle\AwsBundle\Tests\DependencyInjection;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UshiosAwsExtensionTest extends WebTestCase
{
    /**
     * service container.
     */
    protected $container;

    /**
     * Setup test.
     *  @return null
     */
    public function setUp()
    {
        $this->app = new \AppKernel('test', true);
        $this->app->boot();
        $this->container = $this->app->getContainer();

        parent::setUp();
    }

    /**
     * Test getting aws client.
     * @return null
     */
    public function testGetAwsClient()
    {
        $aws = $this->container->get('ushios_aws_client.default');
        
        $this->assertInstanceOf('\Aws\Common\Aws', $aws);
    }
}
