<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ObecCitiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ObecCitiesTable Test Case
 */
class ObecCitiesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ObecCitiesTable
     */
    public $EmplacementProduits;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.EmplacementProduits',
        'app.Produits',
        'app.Actions',
        'app.Tasks',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EmplacementProduits') ? [] : ['className' => ObecCitiesTable::class];
        $this->EmplacementProduits = TableRegistry::getTableLocator()->get('EmplacementProduits', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EmplacementProduits);

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
