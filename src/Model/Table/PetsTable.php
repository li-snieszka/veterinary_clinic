<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pets Model
 *
 * @method \App\Model\Entity\Pet newEmptyEntity()
 * @method \App\Model\Entity\Pet newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Pet[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pet get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pet findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Pet patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pet[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pet|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pet saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pet[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pet[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pet[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pet[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PetsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('pets');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id_pet');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('name')
            ->maxLength('name', 20)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->decimal('weight')
            ->requirePresence('weight', 'create')
            ->notEmptyString('weight');

        $validator
            ->decimal('age')
            ->requirePresence('age', 'create')
            ->notEmptyString('age');

        $validator
            ->integer('id_client')
            ->requirePresence('id_client', 'create')
            ->notEmptyString('id_client');

        $validator
            ->integer('id_genre')
            ->requirePresence('id_genre', 'create')
            ->notEmptyString('id_genre');

        return $validator;
    }
}
