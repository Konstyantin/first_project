<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 09.03.17
 * Time: 21:56
 */

/**
 * Trait First
 */
trait First
{
    /**
     * Define trait method
     *
     * @return string
     */
    public function firstMethod()
    {
        return 'first trait method';
    }
}

/**
 * Trait Second
 */
trait Second
{
    /**
     * Define trait method
     *
     * @return string
     */
    public function secondMethod()
    {
        return 'second trait method';
    }
}


class TestClass
{
    use First, Second;

    /**
     * Override Trait method
     *
     * @return string
     */
    public function firstMethod()
    {
        return 'override trait method';
    }
}

$obj = new TestClass();
echo $obj->firstMethod();