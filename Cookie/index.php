<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 08.03.17
 * Time: 19:15
 */

/**
 * SetCookie $name = 'first' $value = 'first-cookie'
 */
setcookie('first', 'first-cookie');

/**
 * Define expire
 *
 * @var integer $expire
 */
$expire = time() + 60 * 60 * 24 * 30;

/**
 * SetCookie
 *
 * $name = 'second'
 * $value = 'second-cookie'
 * $expire = @var $expire
 */
setcookie('second', 'second-cookie', $expire);

/**
 * Define path
 *
 * @var string $path
 */
$path = '/';

/**
 * SetCookie
 *
 * $name = 'third'
 * $value = 'third-cookie'
 * $expire = @var $expire
 * $path = @var $path
 */
setcookie('third', 'third-cookie', $expire, $path);

/**
 * Define domain
 *
 * @var string $domain
 */
$domain = 'site.loc';

/**
 * SetCookie
 *
 * $name = 'fifth'
 * $value = 'fifth-cookie'
 * $expire = @var $expire
 * $path = @var $path
 * $domain = @var $domain
 */
setcookie('fifth', 'fifth-cookie', $expire, $path, $domain);
setcookie('sixth', 'sixth', $expire, $path, $domain);

/**
 * SetCookie
 *
 * $name = 'third'
 * $value = 'third-cookie'
 * $expire = @var $expire
 * $path = @var $path
 * httponly = true
 */
setcookie('seventh', 'seventh-cookie', $expire, "/", 'localhost', 1);

var_dump($_COOKIE);

/**
 * Remove all exists cookie
 */
if (isset($_SERVER['HTTP_COOKIE'])) {
    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
    foreach ($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        setcookie($name, '', time() - 1000);
        setcookie($name, '', time() - 1000, '/');
    }
}

var_dump($_COOKIE);