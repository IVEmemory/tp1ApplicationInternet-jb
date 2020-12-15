<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EmplacementProduits Model
 *
 * @property \App\Model\Table\ProduitsTable&\Cake\ORM\Association\BelongsTo $Produits
 * @property \App\Model\Table\OkresCountiesTable&\Cake\ORM\Association\BelongsTo $Actions
 * @property \App\Model\Table\TasksTable&\Cake\ORM\Association\HasMany $Tasks
 *
 * @method \App\Model\Entity\ObecCity get($primaryKey, $options = [])
 * @method \App\Model\Entity\ObecCity newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ObecCity[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ObecCity|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ObecCity saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ObecCity patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ObecCity[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ObecCity findOrCreate($search, callable $callback = null, $options = [])
 */
class EmplacementProduitsTable extends Table
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

        $this->setTable('emplacementProduits');
        $this->setDisplayField('actionPro');
        $this->setPrimaryKey('id');

        $this->belongsTo('Produits', [
            'foreignKey' => 'produit_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Actions', [
            'foreignKey' => 'action_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Tasks', [
            'foreignKey' => 'emplacementProduit_id',
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
            ->maxLength('code', 11)
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
        $rules->add($rules->existsIn(['action_id'], 'Actions'));

        return $rules;
    }
}
