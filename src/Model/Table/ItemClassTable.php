<?php
namespace App\Model\Table;

use App\Model\Entity\ItemClas;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ItemClass Model
 *
 */
class ItemClassTable extends Table
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

        $this->table('item_class');
        $this->displayField('name');
        $this->primaryKey('classID');

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
            ->add('classID', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('classID', 'create');

        $validator
            ->allowEmpty('name');

        $validator
            ->add('suggestedGateway', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('suggestedGateway');

        $validator
            ->add('cPdb', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('cPdb');

        $validator
            ->add('a', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('a');

        $validator
            ->add('aMax', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('aMax');

        $validator
            ->add('d', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('d');

        $validator
            ->add('aPrime', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('aPrime');

        $validator
            ->add('cCb', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('cCb');

        $validator
            ->add('m1', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('m1');

        $validator
            ->add('pO', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('pO');

        $validator
            ->add('m2', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('m2');

        $validator
            ->add('cEb', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('cEb');

        $validator
            ->add('s', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('s');

        $validator
            ->add('m3', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('m3');

        $validator
            ->add('sE', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('sE');

        $validator
            ->add('m4', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('m4');

        $validator
            ->add('sH', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('sH');

        $validator
            ->add('m5', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('m5');

        return $validator;
    }
}
