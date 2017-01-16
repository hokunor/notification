<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

use notification\Notification;
use notification\NotificationCreator;

$config = array();
$config['phone'] = '0000';
$config['mail'] = 'mail@localhost';
$config['notification'] = array('mail','sms');
$message = 'Hello World';
$message2 = 'Hello World 2nd place';

$creator = new NotificationCreator();
$notification = new Notification($creator, $config);
$notification->send($message);
$notification->send($message2);

$config['notification'] = array('mail');
$message = 'Hello other';

$notification = new Notification($creator, $config);
$notification->send($message);