<?php
/**
 * Created by PhpStorm.
 * User: activ
 * Date: 15.02.2016
 * Time: 8:35
 * @param $nameClass
 */

function my_autoload($className)
{
    require __DIR__ . DIRECTORY_SEPARATOR .str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
}

spl_autoload_register('my_autoload');