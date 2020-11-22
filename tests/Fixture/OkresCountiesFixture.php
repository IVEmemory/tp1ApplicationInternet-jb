<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OkresCountiesFixture
 */
class OkresCountiesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'ID okres_countyu', 'autoIncrement' => true, 'precision' => null],
        'produit_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'produit', 'precision' => null, 'autoIncrement' => null],
        'code' => ['type' => 'string', 'length' => 9, 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'comment' => 'Kód okres_countyu', 'precision' => null, 'fixed' => null],
        'actionPro' => ['type' => 'string', 'length' => 80, 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'comment' => 'Název okres_countyu', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'produit_id' => ['type' => 'index', 'columns' => ['produit_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'okres_county_ibfk_1' => ['type' => 'foreign', 'columns' => ['produit_id'], 'references' => ['produits', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'code' => 'Lorem i',
                'actionPro' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
