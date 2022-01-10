<?php
// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{
    public function initialize(array $config): void
    {
        $this->setTable('users');
        $this->addBehavior('Timestamp');
    }



    // Add the following method.
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->notEmptyString('name')
            ->add('email', 'valid-email', ['rule' => 'email'])
            ->notEmptyString('phone');

        return $validator;
    }
}