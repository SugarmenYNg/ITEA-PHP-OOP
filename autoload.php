<?php
/**
 * Created by PhpStorm.
 * User: yuriy
 * Date: 13.06.18
 * Time: 21:18
 */
\spl_autoload_register(function ($className) {
    //var_dump($className);
    //App\Helpers\StringHelper
    $parts = \explode('\\', $className);
    //var_dump($parts);

    \array_shift($parts);
    $className = \array_pop($parts);

    $path = \implode(DIRECTORY_SEPARATOR, $parts);

    require \sprintf('%s/s%.php', $path, $className);
});
