<?php
namespace Unicodeveloper\Paystack\Test;

use Mockery;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase {

    public $m;

    function setUp () {

        $this->m = new Mockery;

        parent::setUp();
    }

    /**
     * Clear mockery after every test in preparation for a new mock.
     *
     * @return void
     */
    function tearDown() {

        $this->m->close();

        $this->app = null;

        parent::tearDown();
    }

    /**
     * Register package.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return array      Packages to register
     */
    protected function getPackageProviders($app)
    {
        return [ "Unicodeveloper\Paystack\PaystackServiceProvider" ];
    }

    /**
     * Get alias packages from app.
     *
     * @param  \illuminate\Foundation\Application $app
     * @return array      Aliases.
     */
    protected function getPackageAliases($app)
    {
        return [
            "Paystack" => "Unicodeveloper\Paystack\Facades\Paystack"
        ];
    }
}