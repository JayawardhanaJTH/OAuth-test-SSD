<?php

//start the session
session_start();

//include autoload file from vendor folder
require '../../vendor/autoload.php';

$fb = new Facebook\Facebook([
    'app_id' => '612492623086513',
    'app_secret' => '13a71c4e33d467edcb6c354148541ab3',
    'default_graph_version' => 'v2.7'
]);

$helper = $fb->getRedirectLoginHelper();
$login_url = $helper->getLoginUrl("http://localhost/OAuth-test-SSD/glossary/client/php/");
header('Location:'.$login_url);

?>