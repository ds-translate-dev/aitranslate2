<?php
namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\FileoperationComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\FileoperationComponent Test Case
 */
class FileoperationComponentTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Controller\Component\FileoperationComponent
     */
    public $Fileoperation;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->Fileoperation = new FileoperationComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Fileoperation);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
