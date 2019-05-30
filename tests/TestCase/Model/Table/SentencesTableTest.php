<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SentencesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SentencesTable Test Case
 */
class SentencesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SentencesTable
     */
    public $Sentences;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Sentences',
        'app.Users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Sentences') ? [] : ['className' => SentencesTable::class];
        $this->Sentences = TableRegistry::getTableLocator()->get('Sentences', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Sentences);

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
