<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TextTranslationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TextTranslationsTable Test Case
 */
class TextTranslationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TextTranslationsTable
     */
    public $TextTranslations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.TextTranslations'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TextTranslations') ? [] : ['className' => TextTranslationsTable::class];
        $this->TextTranslations = TableRegistry::getTableLocator()->get('TextTranslations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TextTranslations);

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
