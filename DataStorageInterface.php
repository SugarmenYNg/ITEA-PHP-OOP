<?php
/**
 * Created by PhpStorm.
 * User: yuriy
 * Date: 13.06.18
 * Time: 21:01
 */

interface DataStorageInterface
{
    public function create($key, $item);

    public function delete($key);
}