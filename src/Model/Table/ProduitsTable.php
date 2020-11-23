<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Produits Model
 *
 * @property \App\Model\Table\ObecCitiesTable&\Cake\ORM\Association\HasMany $EmplacementProduits
 * @property \App\Model\Table\OkresCountiesTable&\Cake\ORM\Association\HasMany $Actions
 *
 * @method \App\Model\Entity\KrajRegion get($primaryKey, $options = [])
 * @method \App\Model\Entity\KrajRegion newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\KrajRegion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\KrajRegion|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\KrajRegion saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\KrajRegion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\KrajRegion[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\KrajRegion findOrCreate($search, callable $callback = null, $options = [])
 */
class ProduitsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('produits');
        $this->setDisplayField('actionPro');
        $this->setPrimaryKey('id');

        $this->hasMany('EmplacementProduits', [
            'foreignKey' => 'produit_id',
        ]);
        $this->hasMany('Actions', [
            'foreignKey' => 'produit_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('code')
            ->maxLength('code', 7)
            ->requirePresence('code', 'create')
            ->notEmptyString('code');

        $validator
            ->scalar('actionPro')
            ->maxLength('actionPro', 80)
            ->requirePresence('actionPro', 'create')
            ->notEmptyString('actionPro');

        return $validator;
    }
}