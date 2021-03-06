<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProduitsFixture
 */
class ProduitsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'ID kraj_regione', 'autoIncrement' => true, 'precision' => null],
        'code' => ['type' => 'string', 'length' => 7, 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'comment' => 'Kód kraj_regione', 'precision' => null, 'fixed' => null],
        'actionPro' => ['type' => 'string', 'length' => 80, 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'comment' => 'Název kraj_regione', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_czech_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'code' => 'Lorem',
                'actionPro' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
