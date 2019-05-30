<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ReplyContensTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ReplyContensTable Test Case
 */
class ReplyContensTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ReplyContensTable
     */
    public $ReplyContens;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ReplyContens',
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
        $config = TableRegistry::getTableLocator()->exists('ReplyContens') ? [] : ['className' => ReplyContensTable::class];
        $this->ReplyContens = TableRegistry::getTableLocator()->get('ReplyContens', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ReplyContens);

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
