<?php 
// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
// the Text class
use Cake\Utility\Text;
// the EventInterface class
use Cake\Event\EventInterface;


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

    // Add the following method.

    public function beforeSave(EventInterface $event, $entity, $options)
    {
        if ($entity->isNew() && !$entity->slug) {
            $sluggedName = Text::slug($entity->name);
            // trim slug to maximum length defined in schema
            $entity->slug = substr($sluggedName, 0, 191);
        }
    }
    
}