<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrederTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrederTypesTable Test Case
 */
class OrederTypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OrederTypesTable
     */
    public $OrederTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.OrederTypes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('OrederTypes') ? [] : ['className' => OrederTypesTable::class];
        $this->OrederTypes = TableRegistry::getTableLocator()->get('OrederTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OrederTypes);

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
