<?php
namespace App\Model\Table;

use App\Model\Entity\Location;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Location Model
 *
 */
class LocationTable extends Table
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

        $this->table('location');
        $this->displayField('locationID');
        $this->primaryKey('locationID');

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
            ->add('locationID', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('locationID', 'create');

        $validator
            ->allowEmpty('country');

        $validator
            ->allowEmpty('state');

        $validator
            ->allowEmpty('city');

        $validator
            ->allowEmpty('neighborhood');

        $validator
            ->allowEmpty('signupKey');

        return $validator;
    }
}
