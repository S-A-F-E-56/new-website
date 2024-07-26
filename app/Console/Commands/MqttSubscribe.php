<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\MqttService;

class MqttSubscribe extends Command
{
    protected $signature = 'mqtt:subscribe {topics*}';
    protected $description = 'Subscribe to MQTT topics';

    protected $mqttService;

    public function __construct(MqttService $mqttService)
    {
        parent::__construct();
        $this->mqttService = $mqttService;
    }

    public function handle()
    {
        $topics = $this->argument('topics');
        $this->info('Subscribing to topics: ' . implode(', ', $topics)); // Debug statement
        $this->mqttService->subscribe($topics);
    }
}



