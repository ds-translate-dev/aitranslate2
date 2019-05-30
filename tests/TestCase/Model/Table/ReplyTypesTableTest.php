<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ReplyTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ReplyTypesTable Test Case
 */
class ReplyTypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ReplyTypesTable
     */
    public $ReplyTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ReplyTypes',
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
        $config = TableRegistry::getTableLocator()->exists('ReplyTypes') ? [] : ['className' => ReplyTypesTable::class];
        $this->ReplyTypes = TableRegistry::getTableLocator()->get('ReplyTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ReplyTypes);

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
