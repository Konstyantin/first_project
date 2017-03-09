<?php

/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 09.03.17
 * Time: 22:04
 */

/**
 * Class MagicMethod
 */
class MagicMethod
{
    /**
     * MagicMethod constructor
     */
    public function __construct()
    {
        echo 'construct';
    }

    /**
     * MagicMethod destructor
     */
    public function __destruct()
    {
        echo 'destruct';
    }

    /**
     * Run when writing data to inaccessible properties
     *
     * @param $name
     * @param $value
     */
    public function __set($name, $value)
    {
        echo "Setting '$name' to '$value'\n";
    }

    /**
     * Utilized for reading data from inaccessible properties
     *
     * @param $name
     */
    public function __get($name)
    {
        echo "Getting '$name'\n";
    }

    /**
     * Triggered by calling isset() or empty() on inaccessible properties.
     *
     * @param $name
     */
    public function __isset($name)
    {
        echo "Is '$name' set?\n";
    }

    /**
     * Invoked when unset() is used on inaccessible properties.
     *
     * @param $name
     */
    public function __unset($name)
    {
        echo "Unsetting '$name'\n";
    }

    /**
     * Triggered when invoking inaccessible methods in an object context
     *
     * @param $name
     * @param $arguments
     */
    public function __call($name, $arguments)
    {
        echo "Calling object method '$name' "
            . implode(', ', $arguments). "\n";
    }

    /**
     * Allows a class to decide how it will react when it is treated like a string
     *
     * @return string
     */
    public function __toString()
    {
        return 'Magic method __toString';
    }

    /**
     * Method is called when a script tries to call an object as a function
     *
     * @return string
     */
    public function __invoke()
    {
        return 'Magic method invoke';
    }

    /**
     * Method is called when clone object
     */
    public function __clone()
    {
        echo 'Magic method invoke';
    }
}

$obj = new MagicMethod();