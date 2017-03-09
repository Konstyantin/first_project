<?php

/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 09.03.17
 * Time: 21:00
 */

/**
 * Class ClassMethods
 */
class ClassProperty
{
    /**
     * @var mixed $public
     */
    public $public;

    /**
     * @var mixed $protected
     */
    protected $protected;

    /**
     * @var mixed $private
     */
    private $private;

    /**
     * @var mixed $static
     */
    static public $static;

    /**
     * Get public
     *
     * @return mixed
     */
    public function getPublic()
    {
        return $this->public;
    }

    /**
     * Set public
     *
     * @param mixed $public
     */
    public function setPublic($public)
    {
        $this->public = $public;
    }

    /**
     * Get protected
     *
     * @return mixed
     */
    public function getProtected()
    {
        return $this->protected;
    }

    /**
     * Set protected
     *
     * @param mixed $protected
     */
    public function setProtected($protected)
    {
        $this->protected = $protected;
    }

    /**
     * Get private
     *
     * @return mixed
     */
    public function getPrivate()
    {
        return $this->private;
    }

    /**
     * Set private
     *
     * @param mixed $private
     */
    public function setPrivate($private)
    {
        $this->private = $private;
    }

    /**
     * Get static
     *
     * @return mixed
     */
    public static function getStatic()
    {
        return self::$static;
    }

    /**
     * Set static
     *
     * @param mixed $static
     */
    public static function setStatic($static)
    {
        self::$static = $static;
    }
}

/**
 * Implement ClassMethod
 */
$obj = new ClassProperty();