<?php
/*
 * This file is part of the Exifer package.
 *
 * (c) Igor Golovanov <igor.golovanov@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

spl_autoload_register(function($class) {
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $class);    
    foreach (array('lib', 'tests') as $prefix) {
        $file = __DIR__ . '/../' . $prefix . '/' . $path .'.php';
        if (file_exists($file)) {
            require_once $file;
            return true;
        }
    }
});