<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrderTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrderTypesTable Test Case
 */
class OrderTypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OrderTypesTable
     */
    public $OrderTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.OrderTypes',
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
        $config = TableRegistry::getTableLocator()->exists('OrderTypes') ? [] : ['className' => OrderTypesTable::class];
        $this->OrderTypes = TableRegistry::getTableLocator()->get('OrderTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OrderTypes);

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
}
