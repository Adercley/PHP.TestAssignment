<?php
namespace Test\Linkfire\Assignment;

use Test\Linkfire\Assignment\Helpers\UnitTestCase;
/**
 * @testdox Stub test class
 */
class Stub extends UnitTestCase
{
    /**
     * @test
     * @testdox Assert that true is true
     */
    public function firstOne()
    {
        $this->assertTrue(true);
    }

    /**
     * Test all routes.. use a method to do that automatically.. 
     */
    public function testRouter($method, $uri, $module, $controller, $action, $params)
    {
        $_SERVER['REQUEST_METHOD'] = $method;

        $router = $this->di->get('router');
        $router->handle($uri);

        $this->assertEquals($router->getModuleName(), $module);
        $this->assertEquals($router->getControllerName(), $controller);
        $this->assertEquals($router->getActionName(), $action);
        $this->assertEquals($router->getparams(), $params);
    }

}