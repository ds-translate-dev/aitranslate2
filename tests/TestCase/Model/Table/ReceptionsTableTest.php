<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ReceptionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ReceptionsTable Test Case
 */
class ReceptionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ReceptionsTable
     */
    public $Receptions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Receptions',
        'app.Users',
        'app.OrderTypes',
        'app.ReplyTypes',
        'app.OrderContens',
        'app.ReplyContens'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Receptions') ? [] : ['className' => ReceptionsTable::class];
        $this->Receptions = TableRegistry::getTableLocator()->get('Receptions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Receptions);

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
