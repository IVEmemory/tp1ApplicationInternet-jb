<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TasksTitleTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TasksTitleTable Test Case
 */
class TasksTitleTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TasksTitleTable
     */
    public $TasksTitle;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.TasksTitle',
        'app.Tasks',
        'app.CommentsTasks',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TasksTitle') ? [] : ['className' => TasksTitleTable::class];
        $this->TasksTitle = TableRegistry::getTableLocator()->get('TasksTitle', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TasksTitle);

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
