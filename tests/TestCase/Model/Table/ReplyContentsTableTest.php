<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ReplyContentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ReplyContentsTable Test Case
 */
class ReplyContentsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ReplyContentsTable
     */
    public $ReplyContents;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ReplyContents',
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
        $config = TableRegistry::getTableLocator()->exists('ReplyContents') ? [] : ['className' => ReplyContentsTable::class];
        $this->ReplyContents = TableRegistry::getTableLocator()->get('ReplyContents', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ReplyContents);

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
