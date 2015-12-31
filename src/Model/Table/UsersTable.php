<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;

/**
 * Users Model
 *
 */

class UsersTable extends Table
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

        $this->table('users');
        $this->displayField('userID');
        $this->primaryKey('userID');

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
            ->add('userID', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('userID', 'create');

        $validator
            ->requirePresence('username', 'create')
            ->notEmpty('username');

        $validator
            ->requirePresence('password', 'create')
            ->add('password', [
            'length' => [
                'rule' => ['minLength', 6],
                'message' => 'Must be at least 6 characters long.', ] ])
            ->notEmpty('password');
            
	
        $validator
            ->requirePresence('confirm_password', 'create')
            ->notEmpty('confirm_password')
            ->add('confirm_password', 'compareWith', [
                'rule' => ['compareWith', 'password'],
                'message' => 'Passwords not equal.' ]);

        $validator
            ->add('email', 'valid', ['rule' => 'email'])
            ->notEmpty('email');

        $validator
            ->notEmpty('firstName');

        $validator
            ->notEmpty('lastName');

        $validator
            ->add('status', 'valid', ['rule' => 'numeric'])
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        $validator
            ->add('nbr', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('nbr');

        $validator
            ->add('lastLogin', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('lastLogin');

        $validator
            ->add('prevLastLogin', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('prevLastLogin');

        $validator
            ->add('locationID', 'valid', ['rule' => 'numeric'])
            ->requirePresence('locationID', 'create')
            ->notEmpty('locationID');

        $validator
            ->requirePresence('token', 'create')
            ->notEmpty('token')
            ->add('token', 'custom', [
                'rule' => function ($value, $context) {
                   $loc = TableRegistry::get('Location');
                   return ($value === $loc->get(1, ['fields' => ['signupKey'] ])['signupKey']);
                 },
                'message' => 'Invalid Signup Key.' ]);
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
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->isUnique(['email']));
        return $rules;
    }

}
