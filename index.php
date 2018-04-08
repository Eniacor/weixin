<?php 
require __DIR__.'vendor/autoload.php';
use EasyWeChat\Factory;

$config = [
    'app_id' => 'wx60f20a5deb122395',
    'secret' => 'd19f8c46c01959ce3099dcccc8703ce4',
    'token'  =>  'ma123456'
];

$app = Factory::officialAccount($config);
$response=$app->server->serve();
$response->send();