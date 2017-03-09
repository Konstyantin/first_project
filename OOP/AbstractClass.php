<?php

/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 09.03.17
 * Time: 21:09
 */

/**
 * Class AbstractClass
 */
abstract class AbstractClass
{
    /**
     * Define private method
     *
     * @return string
     */
    private function simpleMethod()
    {
        return 'simple method in abstract class';
    }

    /**
     * Define abstract method
     *
     * @return mixed
     */
    abstract public function abstractPublicMethod();

    /**
     * Define abstract method
     *
     * @return mixed
     */
    abstract protected function abstractProtectedMethod();
}

/**
 * Class SomeClass
 */
class SomeClass extends AbstractClass
{

    /**
     * Implementation abstract method
     *
     * @return string
     */
    public function abstractProtectedMethod()
    {
        return 'abstract protected method';
    }

    /**
     * Implementation abstract method
     *
     * @return string
     */
    public function abstractPublicMethod()
    {
        return 'abstract public method';
    }
}

$obj = new SomeClass();
