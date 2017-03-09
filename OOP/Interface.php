<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 09.03.17
 * Time: 22:29
 */

/**
 * Interface FirstInterface
 */
interface FirstInterface
{
    /**
     * @return mixed
     */
    public function firstMethod();
}

/**
 * Interface SecondInterface
 */
interface SecondInterface
{
    /**
     * @return mixed
     */
    public function secondMethod();
}

/**
 * Class SomeClass
 */
class SomeClass implements FirstInterface, SecondInterface
{
    /**
     * Implementation interface method
     */
    public function firstMethod()
    {
        echo 'Implementation interface first method';
    }

    /**
     * Implementation interface method
     */
    public function secondMethod()
    {
        echo 'Implementation interface second method';
    }
}

$obj = new SomeClass();
