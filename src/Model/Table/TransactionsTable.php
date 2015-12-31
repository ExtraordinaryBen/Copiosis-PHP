<?php
namespace App\Model\Table;

use App\Model\Entity\Transaction;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Transactions Model
 *
 */
class TransactionsTable extends Table
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

        $this->table('transactions');
        $this->displayField('transactionID');
        $this->primaryKey('transactionID');

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
            ->allowEmpty('transactionID', 'create')
            ->add('transactionID', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->add('providerID', 'valid', ['rule' => 'numeric'])
            ->requirePresence('providerID', 'create')
            ->notEmpty('providerID');

        $validator
            ->allowEmpty('providerNotes');

        $validator
            ->add('receiverID', 'valid', ['rule' => 'numeric'])
            ->requirePresence('receiverID', 'create')
            ->notEmpty('receiverID');

        $validator
            ->allowEmpty('receiverNotes');

        $validator
            ->add('date', 'valid', ['rule' => 'date'])
            ->allowEmpty('date');

        $validator
            ->add('productID', 'valid', ['rule' => 'numeric'])
            ->requirePresence('productID', 'create')
            ->notEmpty('productID');

        $validator
            ->add('productGateway', 'valid', ['rule' => 'numeric'])
            ->requirePresence('productGateway', 'create')
            ->notEmpty('productGateway');

        $validator
            ->requirePresence('productDesc', 'create')
            ->notEmpty('productDesc');

        $validator
            ->allowEmpty('status');

        $validator
            ->add('dateAdded', 'valid', ['rule' => 'datetime'])
            ->requirePresence('dateAdded', 'create')
            ->notEmpty('dateAdded');

        $validator
            ->add('createdBy', 'valid', ['rule' => 'numeric'])
            ->requirePresence('createdBy', 'create')
            ->notEmpty('createdBy');

        $validator
            ->add('dateClosed', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('dateClosed');

        $validator
            ->add('nbr', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('nbr');

        $validator
            ->add('satisfaction', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('satisfaction');

        return $validator;
    }
}
