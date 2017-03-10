<?php

/*
 * Define curl_access function, function allow check access to $url
 *
 * @param string $url
 */
function curl_access(string $url)
{

    /**
     * Initialize a cURL session
     */
    $curl = curl_init();

    /**
     * Curl options
     */
    $options = [
        CURLOPT_URL => $url, // provide the URL to use in the request
        CURLOPT_HEADER => 1, // read header
        CURLOPT_NOBODY => 1, // read only header without body
        CURLOPT_RETURNTRANSFER => 1, //return the transfer as a string of the return value of curl_exec()
        CURLOPT_FRESH_CONNECT => 1 // use of a new connection instead of a cached one.
    ];

    /**
     * Set multiple options for a cURL transfer
     */
    curl_setopt_array($curl, $options);

    /*
     * Return false if execute curl session is success
     */
    if (!curl_exec($curl)) {
        return false;
    }

    /**
     * Get status HTTP
     *
     * @var integer $httpcode
     */
    $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

    /**
     * Return @var $httpcode
     */
    return $httpcode;
}

/**
 * Call execute function curl_access
 */
echo curl_access('https://htmlweb.ru/php/php_curl.php');