<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PbmtSourceLanguagesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PbmtSourceLanguagesTable Test Case
 */
class PbmtSourceLanguagesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PbmtSourceLanguagesTable
     */
    public $PbmtSourceLanguages;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.PbmtSourceLanguages'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PbmtSourceLanguages') ? [] : ['className' => PbmtSourceLanguagesTable::class];
        $this->PbmtSourceLanguages = TableRegistry::getTableLocator()->get('PbmtSourceLanguages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PbmtSourceLanguages);

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
