<?php

namespace App\Services;

use PhpMqtt\Client\MqttClient;
use PhpMqtt\Client\ConnectionSettings;
use App\Models\SensorData;
use Carbon\Carbon;

class MqttService
{
    protected $client;

    public function __construct()
    {
        $this->client = new MqttClient(
            config('mqtt.host'),
            config('mqtt.port'),
            uniqid()
        );

        $settings = (new ConnectionSettings)
            ->setUsername(config('mqtt.username'))
            ->setPassword(config('mqtt.password'));

        $this->client->connect($settings);
        echo "Connected to MQTT broker.\n"; // Debug statement
    }   

    public function subscribe(array $topics)
    {
        foreach ($topics as $topic) {
            echo "Subscribing to topic: {$topic}\n"; // Debug statement
            $this->client->subscribe($topic, function ($topic, $message) {
                echo "Received message on topic {$topic}: {$message}\n"; // Debug statement
                $this->handleMessage($topic, $message);
            }, 0);
        }

        $this->client->loop(true);
    }

    public function handleMessage($topic, $message)
    {
        // Memeriksa topik
        if ($topic == '/SIC5/S.A.F.E/test/response') {
            // Pisahkan data dari pesan
            $parts = explode(' - ', $message);
            $status = $parts[0];
            $value = $parts[1] ?? null;

            // Simpan data ke database
            SensorData::create([
                'sensor_id' => $topic,
                'value' => $value,
                'status' => $status,
                'received_at' => now()
            ]);
            echo "Stored message from topic {$topic} in database.\n"; // Debug statement
        }
    }
}
