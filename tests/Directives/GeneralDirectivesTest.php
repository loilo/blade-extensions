<?php namespace Radic\Tests\BladeExtensions\Directives;

use Illuminate\Html\HtmlServiceProvider;
use Mockery as m;
use Radic\Testing\Traits\BladeViewTestingTrait;
use Radic\Tests\BladeExtensions\TestCase;

/**
 * Class ViewTest
 *
 * @author     Robin Radic
 *
 */
class GeneralDirectivesTest extends TestCase
{
    use BladeViewTestingTrait;

    public function setUp()
    {
        parent::setUp();
        $this->loadViewTesting();
        $this->registerHtml();
        $this->registerBlade();
    }



    public function testGeneral()
    {
        $this->assertTrue(true);
    }
}