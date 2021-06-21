<?php
require __DIR__ . '/vendor/autoload.php';

$options = array(
    'cluster' => 'us2',
    'useTLS' => true
);
$pusher = new Pusher\Pusher(
    '6f0797fb40a05ed31b7c',
    '8519eee470715afd86d0',
    '1219862',
    $options
);

$data['message'] = 'hello world';
$pusher->trigger('myitedu', 'my-event', $data);
?>