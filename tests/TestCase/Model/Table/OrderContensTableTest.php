<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrderContensTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrderContensTable Test Case
 */
class OrderContensTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OrderContensTable
     */
    public $OrderContens;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.OrderContens',
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
        $config = TableRegistry::getTableLocator()->exists('OrderContens') ? [] : ['className' => OrderContensTable::class];
        $this->OrderContens = TableRegistry::getTableLocator()->get('OrderContens', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OrderContens);

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
