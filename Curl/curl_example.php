<?php

/**
 * Initialize a cURL session
 */
$curl = curl_init ("http://php.net/");

/**
 * Open file for write
 */
$file = fopen ("curl_file/example_page.txt", "w");

/**
 * Curl options
 */
$options = [
    CURLOPT_URL => "http://php.net/",
    CURLOPT_FILE => $file,
    CURLOPT_HEADER => 0
];

/**
 * Set multiple options for a cURL transfer
 */
curl_setopt_array($curl, $options);

/**
 * Perform a cURL session
 */
curl_exec ($curl);

/**
 * Close a cURL session
 */
curl_close ($curl);

/**
 * Closes an open file pointer
 */
fclose ($file);