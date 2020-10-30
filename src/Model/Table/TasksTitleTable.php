<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TasksTitle Model
 *
 * @property \App\Model\Table\TasksTable&\Cake\ORM\Association\BelongsTo $Tasks
 * @property \App\Model\Table\CommentsTasksTable&\Cake\ORM\Association\BelongsTo $CommentsTasks
 * @property \App\Model\Table\TasksTitleTable&\Cake\ORM\Association\HasMany $TasksTitle
 *
 * @method \App\Model\Entity\TasksTitle get($primaryKey, $options = [])
 * @method \App\Model\Entity\TasksTitle newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TasksTitle[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TasksTitle|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TasksTitle saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TasksTitle patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TasksTitle[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TasksTitle findOrCreate($search, callable $callback = null, $options = [])
 */
class TasksTitleTable extends Table
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

        $this->setTable('tasks_title');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->belongsTo('Tasks', [
            'foreignKey' => 'tasks_title_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('TasksTitle', [
            'foreignKey' => 'tasks_title_id',
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
            ->scalar('kod')
            ->maxLength('kod', 11)
            ->requirePresence('kod', 'create')
            ->notEmptyString('kod');

        $validator
            ->scalar('title')
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

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
        $rules->add($rules->existsIn(['tasks_title_id'], 'Tasks'));

        return $rules;
    }
}
