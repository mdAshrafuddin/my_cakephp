<?php
// src/Model/Entity/Article.php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

class User extends Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => false,
        'name' => true,
    ];

    // Add this method
    protected function _setPassword($password)
    {
        if (strlen($password) > 0) {
          return (new DefaultPasswordHasher)->hash($password);
        }
    }
}