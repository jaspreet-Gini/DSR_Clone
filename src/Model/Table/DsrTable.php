<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Dsr Model
 *
 * @method \App\Model\Entity\Dsr newEmptyEntity()
 * @method \App\Model\Entity\Dsr newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Dsr> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Dsr get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Dsr findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Dsr patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Dsr> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Dsr|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Dsr saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Dsr>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Dsr>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Dsr>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Dsr> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Dsr>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Dsr>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Dsr>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Dsr> deleteManyOrFail(iterable $entities, array $options = [])
 */
class DsrTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('dsr');
        $this->setDisplayField('project_name');
        $this->setPrimaryKey('id');
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
            ->scalar('project_name')
            ->maxLength('project_name', 255)
            ->requirePresence('project_name', 'create')
            ->notEmptyString('project_name');

        $validator
            ->integer('task_no')
            ->requirePresence('task_no', 'create')
            ->notEmptyString('task_no');

        $validator
            ->scalar('task_description')
            ->requirePresence('task_description', 'create')
            ->notEmptyString('task_description');

        $validator
            ->time('hour')
            ->requirePresence('hour', 'create')
            ->notEmptyTime('hour');

        $validator
            ->scalar('status')
            ->maxLength('status', 255)
            ->requirePresence('status', 'create')
            ->notEmptyString('status');

        $validator
            ->date('date')
            ->requirePresence('date', 'create')
            ->notEmptyDate('date');

        return $validator;
    }
}
