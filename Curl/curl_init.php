<?php

/**
 * Initialize a cURL session
 */
$curl = curl_init();

/**
 * Curl options
 */
curl_setopt($curl, CURLOPT_URL, 'https://yandex.ua/');

/**
 * Curl options
 */
curl_setopt($curl, CURLOPT_HEADER, false);

/**
 * Curl options
 */
curl_exec($curl);

/**
 * Closes an open file pointer
 */
curl_close($curl);
