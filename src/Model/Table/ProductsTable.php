<?php
namespace App\Model\Table;

use App\Model\Entity\Product;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Products Model
 *
 */
class ProductsTable extends Table
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

        $this->table('products');
        $this->displayField('name');
        $this->primaryKey('productID');

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
            ->add('productID', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('productID', 'create');

        $validator
            ->requirePresence('type', 'create')
            ->notEmpty('type');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->add('gateway', 'valid', ['rule' => 'numeric'])
            ->requirePresence('gateway', 'create')
            ->notEmpty('gateway');

        $validator
            ->add('itemClass', 'valid', ['rule' => 'numeric'])
            ->requirePresence('itemClass', 'create')
            ->notEmpty('itemClass');

        $validator
            ->add('createdDate', 'valid', ['rule' => 'datetime'])
            ->requirePresence('createdDate', 'create')
            ->notEmpty('createdDate');

        $validator
            ->add('deletedDate', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('deletedDate');

        $validator
            ->add('ownerID', 'valid', ['rule' => 'numeric'])
            ->requirePresence('ownerID', 'create')
            ->notEmpty('ownerID');

        $validator
            ->requirePresence('uniqueidentifier', 'create')
            ->notEmpty('uniqueidentifier')
            ->add('uniqueidentifier', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        return $validator;
    }
}
