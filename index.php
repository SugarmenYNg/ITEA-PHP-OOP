<?php
/**
 * Created by PhpStorm.
 * User: yuriy
 * Date: 13.06.18
 * Time: 20:51
 */
require __DIR__.'./InMemoryDataStorage.php';

$storage = new InMemoryDataStorage();

$storage->create('login', 'Ivan');
$storage->create('email', 'test@gmail.com');
$storage->create('dataDir', './data');

var_dump($storage->get('login'));

$storage->delete('login');

var_dump($storage->get('login'));
