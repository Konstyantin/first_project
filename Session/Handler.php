<?php

/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 08.03.17
 * Time: 16:39
 */

/**
 * Class Handler
 */
class Handler implements SessionHandlerInterface
{
    /**
     * @var string $savePath
     */
    private $savePath;

    /**
     * Execute open session
     *
     * @param string $savePath
     * @param string $sessionName
     * @return bool
     */
    public function open($savePath, $sessionName)
    {
        $this->savePath = $savePath;
        if (!is_dir($this->savePath)) {
            mkdir($this->savePath, 0777);
        }

        return true;
    }

    /**
     * Execute when the session operation is done
     *
     * @return bool
     */
    public function close()
    {
        return true;
    }

    /**
     * Get session data
     *
     * @param string $id
     * @return string
     */
    public function read($id)
    {
        return (string)file_get_contents("$this->savePath/sess_$id");
    }

    /**
     * Set new data to session storage file
     *
     * @param string $id
     * @param string $data
     * @return bool
     */
    public function write($id, $data)
    {
        return file_put_contents("$this->savePath/sess_$id", $data) === false ? false : true;
    }

    /**
     * Destroy session
     *
     * @param string $id
     * @return bool
     */
    public function destroy($id)
    {
        $file = "$this->savePath/sess_$id";
        if (file_exists($file)) {
            unlink($file);
        }

        return true;
    }

    /**
     * Garbage collector
     *
     * @param int $maxlifetime
     * @return bool
     */
    public function gc($maxlifetime)
    {
        foreach (glob("$this->savePath/sess_*") as $file) {
            if (filemtime($file) + $maxlifetime < time() && file_exists($file)) {
                unlink($file);
            }
        }

        return true;
    }
}

$handler = new Handler();
session_set_save_handler($handler, true);
session_start();
