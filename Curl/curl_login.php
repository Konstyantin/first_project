<?php

/**
 * Curl login 
 *
 * @param type $url
 * @param type $postData
 * @param type $cookieFile
 * @return type
 */
function Login($url, $postData = null , $cookieFile = 'curl_file/cookie.txt')
{
    /**
     * Curl init
     */
    $curl = curl_init($url);

    /**
     * Curl options
     */
    $options = [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_USERAGENT => 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:51.0) Gecko/20100101 Firefox/51.0',
        CURLOPT_COOKIEJAR => $cookieFile,
        CURLOPT_COOKIEFILE => $cookieFile,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
    ];

    /**
     * Set multiple options for a cURL transfer
     */
    curl_setopt_array($curl, $options);
    
    /**
     * Check pass post data
     */
    if ($postData) {
        curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);
    }
    
    /**
     * Result executing curl
     *
     * @var string $html template
     */
    $html = curl_exec($curl);

    /**
     * Close CURL
     */

    curl_close($curl);
    /**
     * Return result
     */


    /**
     * Return @var $html
     */
    return $html;
}

/**
 * Clear cookie.txt form data
 */
file_put_contents('curl_file/cookie.txt', '');

/**
 * Login filed data
 */
$postData = [
    'op' => 'login',
    'dest' => 'https://www.reddit.com/',
    'user' => 'konstyantin',
    'passwd' => '123456789q',
];

/**
 * Exe
 */
$html = Login('https://www.reddit.com/post/login', $postData);
echo $html;