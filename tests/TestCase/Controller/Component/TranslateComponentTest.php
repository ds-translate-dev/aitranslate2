<?php
namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\TranslateComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\TranslateComponent Test Case
 */
class TranslateComponentTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Controller\Component\TranslateComponent
     */
    public $Translate;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->Translate = new TranslateComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Translate);

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
