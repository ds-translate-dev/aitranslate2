<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserCategoriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserCategoriesTable Test Case
 */
class UserCategoriesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UserCategoriesTable
     */
    public $UserCategories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.UserCategories',
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
        $config = TableRegistry::getTableLocator()->exists('UserCategories') ? [] : ['className' => UserCategoriesTable::class];
        $this->UserCategories = TableRegistry::getTableLocator()->get('UserCategories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserCategories);

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
