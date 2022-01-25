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
        $this->hasMany('Articles')
            ->setForeignKey('user_id')
            ->setDependent(true);
    }



    // Add the following method.
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->allowEmptyString('email');

        return $validator;
    }
}