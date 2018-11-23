<?php

require_once __DIR__ . '/../vendor/autoload.php';

/**
 * Client
 */
$client = new \Mafikes\KiwiApi\Client();

/**
 * Doc: https://docs.kiwi.com/locations/
 */
$locations = new \Mafikes\KiwiApi\Model\Locations($client);

// Only query
$locations->searchByQuery([
    'term' => 'PRG',
    'locale' => 'en-US',
    'location_types' => 'airport',
    'limit' => '10',
    'active_only' => 'true',
    'sort' => 'name'
]);

// Query with type
$locations->searchByQuery([
    'type' => 'radius',
    'term' => 'PRG',
    'locale' => 'en-US',
    'location_types' => 'airport',
    'limit' => '10',
    'active_only' => 'true',
    'sort' => 'name'
]);
