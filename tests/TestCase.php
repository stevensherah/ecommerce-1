<?php


class TestCase extends \Illuminate\Foundation\Testing\TestCase
{
    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://localhost:8888';

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';
        $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

        return $app;
    }

    public function testIsInstanceOfProduct()
    {
        $this->visit($this->baseUrl);
        $came = ['hellos' => 'come'];

        return $this->assertArrayHasKey('hello', $came);
    }

    public function testIfSomeThing()
    {
    }
}
