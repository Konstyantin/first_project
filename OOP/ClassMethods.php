<?php

/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 09.03.17
 * Time: 20:43
 */


/**
 * Class ClassMethods
 */
class ClassMethods
{
    /**
     * Define public class method
     *
     * @return string
     */
    public function publicMethod()
    {
        return 'public method';
    }

    /**
     * Define protected class method
     *
     * @return string
     */
    protected function protectedMethod()
    {
        return 'protected method';
    }

    /**
     * Define private class method
     *
     * @return string
     */
    private function privateMethod()
    {
        return 'private method';
    }

    /**
     * Define getter method for protected class method
     * which call protected class method
     *
     * @return string
     */
    public function getProtectedMethod()
    {
        return $this->protectedMethod();
    }

    /**
     * Define getter method for private class method
     * which call private class method
     *
     * @return string
     */
    public function getPrivateMethod()
    {
        return $this->privateMethod();
    }

    /**
     * Define static class method
     * Static method call on class not object
     *
     * @return string
     */
    public static function staticMethod()
    {
        return 'static method';
    }
}

/**
 * Implement ClassMethod
 */
$obj = new ClassMethods();

/**
 * realisation call static method
 */
echo ClassMethods::staticMethod();