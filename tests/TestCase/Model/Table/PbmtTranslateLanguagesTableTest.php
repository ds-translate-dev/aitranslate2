<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PbmtTranslateLanguagesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PbmtTranslateLanguagesTable Test Case
 */
class PbmtTranslateLanguagesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PbmtTranslateLanguagesTable
     */
    public $PbmtTranslateLanguages;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.PbmtTranslateLanguages'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PbmtTranslateLanguages') ? [] : ['className' => PbmtTranslateLanguagesTable::class];
        $this->PbmtTranslateLanguages = TableRegistry::getTableLocator()->get('PbmtTranslateLanguages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PbmtTranslateLanguages);

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
