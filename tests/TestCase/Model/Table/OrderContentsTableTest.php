<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrderContentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrderContentsTable Test Case
 */
class OrderContentsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OrderContentsTable
     */
    public $OrderContents;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.OrderContents',
        'app.Receptions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('OrderContents') ? [] : ['className' => OrderContentsTable::class];
        $this->OrderContents = TableRegistry::getTableLocator()->get('OrderContents', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OrderContents);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
