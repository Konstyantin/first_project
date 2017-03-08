<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 08.03.17
 * Time: 0:00
 */

/**
 * Class SessionCustomHandler
 */
class SessionCustomHandler
{
    /**
     * Path to file store session data
     *
     * @var string $sessionSavePath
     */
    private $sessionSavePath;

    /**
     * Starting session
     */
    public function start()
    {
        if ($this->getSessionStatus() !== 2) {
            session_start();
        }
    }

    /**
     * Destroying session
     */
    public function stop()
    {
        if ($this->getSessionStatus() !== 0) {
            session_unset();
            session_destroy();
            session_write_close();
            setcookie(session_name(),'',0,'/');
        }
    }

    /**
     * Get session status
     *
     * Default session status
     * PHP_SESSION_DISABLED = 0
     * PHP_SESSION_NONE = 1
     * PHP_SESSION_ACTIVE = 2
     *
     * @return int
     */
    public function getSessionStatus()
    {
        return session_status();
    }

    /**
     * Get value from $_SESSION
     *
     * @param string $key
     * @return mixed
     */
    public function getValue(string $key)
    {
        return $_SESSION[$key];
    }

    /**
     * Set value in $_SESSION
     *
     * @param string $key
     * @param mixed $value
     */
    public function setValue(string $key, $value)
    {
        $_SESSION[$key] = $value;
    }

    /**
     * Delete Session value by $key
     *
     * @param string $key
     */
    public function removeSessionValue(string $key)
    {
        if ($this->checkExistKey($key)) {
            unset($_SESSION[$key]);
        }
    }

    /**
     * Check already exists key in $_SESSION store
     *
     * @return bool
     */
    public function checkExistKey(string $key)
    {
        return $_SESSION[$key] ? true : false;
    }

    /**
     * Check already exist key => value in $_SESSION store
     *
     * @return bool
     */
    public function checkExist(string $key, $value)
    {
        return $_SESSION[$key] = $value ? true : false;
    }

    /**
     * Get session ID
     *
     * @return string
     */
    public function getSessionId()
    {
        return session_id();
    }

    /**
     * Get session save path
     *
     * @return string
     */
    public function getSessionSavePath()
    {
        return $this->sessionSavePath;
    }

    /**
     * Set path for save session file
     *
     * @param string $path
     */
    public function setSessionSavePath(string $path)
    {
        $this->sessionSavePath = $path;

        session_save_path($path);
    }

    /**
     * Set session life time
     *
     * @param int $duration
     */
    public function setSessionLifeTime(int $duration)
    {
        session_set_cookie_params($duration);
    }

    /**
     * Get session lifetime
     *
     * @return array
     */
    public function getSessionLifeTime()
    {
        return session_get_cookie_params();
    }

    /**
     * Get content from session file store
     *
     * @return string
     */
    public function getSessionFileContent()
    {
        $file = $this->getSessionSavePath() . '/sess_' . $this->getSessionId();

        return (string) file_get_contents($file);
    }
}
