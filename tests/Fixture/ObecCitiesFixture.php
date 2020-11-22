<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ObecCitiesFixture
 */
class ObecCitiesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'ID obce', 'autoIncrement' => true, 'precision' => null],
        'produit_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'produit', 'precision' => null, 'autoIncrement' => null],
        'action_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'action', 'precision' => null, 'autoIncrement' => null],
        'code' => ['type' => 'string', 'length' => 11, 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'comment' => 'Kód obce', 'precision' => null, 'fixed' => null],
        'actionPro' => ['type' => 'string', 'length' => 80, 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'comment' => 'Název obce', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'produit_id' => ['type' => 'index', 'columns' => ['produit_id'], 'length' => []],
            'action_id' => ['type' => 'index', 'columns' => ['action_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'obec_city_ibfk_1' => ['type' => 'foreign', 'columns' => ['produit_id'], 'references' => ['produits', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'obec_city_ibfk_2' => ['type' => 'foreign', 'columns' => ['action_id'], 'references' => ['actions', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'produit_id' => 1,
                'action_id' => 1,
                'code' => 'Lorem ips',
                'actionPro' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
