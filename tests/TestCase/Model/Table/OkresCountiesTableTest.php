<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OkresCountiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OkresCountiesTable Test Case
 */
class OkresCountiesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OkresCountiesTable
     */
    public $Actions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Actions',
        'app.Produits',
        'app.EmplacementProduits',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Actions') ? [] : ['className' => OkresCountiesTable::class];
        $this->Actions = TableRegistry::getTableLocator()->get('Actions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Actions);

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
