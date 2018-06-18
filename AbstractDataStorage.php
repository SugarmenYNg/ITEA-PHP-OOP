<?php
/**
 * Created by PhpStorm.
 * User: yuriy
 * Date: 13.06.18
 * Time: 20:42
 */

require __DIR__.'./DataStorageInterface.php';

abstract class AbstractDataStorage implements DataStorageInterface {
    abstract public function create($key, $item);

    abstract function delete($key);

    public function get($key)
    {
        return $key;
    }
}
