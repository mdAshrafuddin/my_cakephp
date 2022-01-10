<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$c_name = $this->request->getParam('controller');
$a_name = $this->request->getParam('action');

$cakeDescription = 'My Admin';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['bootstrap.min.css']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Admin Panel</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?= $a_name == 'logout' ? 'active' : ''?>" href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'logout'])?>">logout</a>
                    </li>
                </ul>
            </div>
                
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-4">
            <div class="list-group">
                <?= $this->Html->link('Users', '/users',['class' => 'list-group-item list-group-item-action active'])?>
                <!-- <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                    Users
                </a> -->
                <a href="#" class="list-group-item list-group-item-action">Students</a>
            </div>
            </div>
            <div class="col-8">
                <?= $this->fetch('content') ?>
            </div>
        </div>
    </div>

    <?= $this->Html->script(['bootstrap.min.js',]) ?>
</body>
</html>
 