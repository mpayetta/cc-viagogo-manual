<?php

require 'require/react.php';
require 'require/ringphp.php';
require 'require/guzzlehttp.php';
require 'require/viagogo.php';

/*
    Here we instantiate the $api object which is initialised using your client credentials 
    (id and secret). Once we 	have the api object, we can get an access token and start
    sending requests to the API.
*/
$clientId = '<CLIENT_ID_HERE>';
$clientSecret = '<CLIENT_SECRET_HERE>'; 
$api = new Viagogo\ViagogoClient($clientId, $clientSecret);
$api->setToken($api->getOAuthClient()->getClientAccessToken()); 
$query = $_GET['query'];
$searchResults = $api->getSearchClient()->getSearch($query);
print "<pre>";
print_r($searchResults);
print "</pre>";

?>