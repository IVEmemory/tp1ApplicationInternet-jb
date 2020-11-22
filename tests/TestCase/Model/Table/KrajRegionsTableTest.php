<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\KrajRegionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\KrajRegionsTable Test Case
 */
class KrajRegionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\KrajRegionsTable
     */
    public $Produits;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Produits',
        'app.EmplacementProduits',
        'app.Actions',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Produits') ? [] : ['className' => KrajRegionsTable::class];
        $this->Produits = TableRegistry::getTableLocator()->get('Produits', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Produits);

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
