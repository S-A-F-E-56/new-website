<?php
return [
    'host' => env('MQTT_HOST', 'broker.hivemq.com'),
    'port' => env('MQTT_PORT', 1883),
    'username' => env('MQTT_USERNAME', null),
    'password' => env('MQTT_PASSWORD', null),
];