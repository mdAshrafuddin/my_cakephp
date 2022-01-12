<?php 
// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class StudentsTable extends Table
{
    public function initialize(array $config): void
    {
        $this->addBehavior('Timestamp');
        $this->setTable('Students');
    }

    public function validationDefault(Validator $validator): Validator
    {
        // adding model validation for fields
        $validator
            ->requirePresence("name")
            ->notEmpty("name", "Name field value is needed")
            ->requirePresence("phone")
            ->numeric("phone");
        return $validator;
    }
}