<?php

/**
 * Initialize a cURL session
 */
$curl = curl_init();

/**
 * @var string $url
 */
$url = 'https://www.google.com.ua/';

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

/**
 * @var string $header 
 */
$header = curl_exec($curl);

/**
 * Close a cURL session
 */
curl_close($curl);
