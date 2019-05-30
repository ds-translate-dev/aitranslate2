<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FileTranslationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FileTranslationsTable Test Case
 */
class FileTranslationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FileTranslationsTable
     */
    public $FileTranslations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.FileTranslations'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('FileTranslations') ? [] : ['className' => FileTranslationsTable::class];
        $this->FileTranslations = TableRegistry::getTableLocator()->get('FileTranslations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FileTranslations);

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
