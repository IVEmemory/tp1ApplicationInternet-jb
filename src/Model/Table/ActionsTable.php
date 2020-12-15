<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Actions Model
 *
 * @property \App\Model\Table\ProduitsTable&\Cake\ORM\Association\BelongsTo $Produits
 * @property \App\Model\Table\ObecCitiesTable&\Cake\ORM\Association\HasMany $EmplacementProduits
 *
 * @method \App\Model\Entity\OkresCounty get($primaryKey, $options = [])
 * @method \App\Model\Entity\OkresCounty newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\OkresCounty[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OkresCounty|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OkresCounty saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OkresCounty patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OkresCounty[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\OkresCounty findOrCreate($search, callable $callback = null, $options = [])
 */
class ActionsTable extends Table
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

        $this->setTable('actions');
        $this->setDisplayField('actionPro');
        $this->setPrimaryKey('id');

        $this->belongsTo('Produits', [
            'foreignKey' => 'produit_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('EmplacementProduits', [
            'foreignKey' => 'action_id',
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
            ->maxLength('code', 9)
            ->requirePresence('code', 'create')
            ->notEmptyString('code');

        $validator
            ->scalar('actionPro')
            ->maxLength('actionPro', 80)
            ->requirePresence('actionPro', 'create')
            ->notEmptyString('actionPro');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['produit_id'], 'Produits'));

        return $rules;
    }
}
