<?php

require_once __DIR__ . '/../vendor/autoload.php';

/**
 * Client
 */
$client = new \Mafikes\KiwiApi\Client();

/**
 * Locations
 * Doc: https://docs.kiwi.com/locations/
 */
$client->getLocations()->searchByQuery([
    'term' => 'PRG',
    'locale' => 'en-US',
    'location_types' => 'airport',
    'limit' => '10',
    'active_only' => 'true',
    'sort' => 'name'
]);

// Query with type in data
$client->getLocations()->searchByQuery([
    'type' => 'radius',
    'term' => 'PRG',
    'locale' => 'en-US',
    'location_types' => 'airport',
    'limit' => '10',
    'active_only' => 'true',
    'sort' => 'name'
]);

// Airlines
$client->getAirlines()->getAll();

// Get link for logo airline - ID airlines
$client->getAirlines()->getImage('JQ');

// Basic Flights
$client->getFlights()->searchByQuery([
    'fly_from' => 'PRG',
    'fly_to' => 'LGW',
    'date_from' => '08/08/2019',
    'date_to' => '08/09/2019',
    'partners' => 'picky',
]);

// Flights
$client->getFlights()->searchByQuery([
    'fly_from' => 'CZ',
    'fly_to' => 'porto',
    'date_from' => '08/08/2019',
    'date_to' => '08/09/2019',
    'longitude_from' => '14.0000',
    'latitude_from' => '50.2000',
    'radius_from' => 200,
    'longitude_to' => '14.0000',
    'latitude_to' => '50.2000',
    'radius_to' => 200,
//    'nights_in_dst_from' => 2,
//    'nights_in_dst_to' => 14,
    'return_from' => '08/08/2019',
    'return_to' => '08/09/2019',
    'max_fly_duration' => 6,
    'flight_type' => 'oneway',
    'adults' => 1,
    'children' => 0,
    'infants' => 0,
    'fly_days' => [0, 1, 2, 3, 4, 5, 6],
    'fly_days_type' => 'departure',
    'ret_fly_days' => [0, 1, 2, 3, 4, 5, 6],
    'ret_fly_days_type' => 'departure',
    'one_for_city' => 0,
    'only_working_days' => 0,
    'only_weekends' => 0,
    'one_per_date' => 0,
    'direct_flights' => 0,
    'locale' => 'en',
    'partner' => 'picky',
    'partner_market' => 'us',
    'v' => 3,
//    'xml' => '',
    'curr' => 'EUR',
    'price_from' => 1,
    'price_to' => 10000,
    'dtime_from' => '00:00',
    'dtime_to' => '00:00',
    'atime_from' => '00:00',
    'atime_to' => '00:00',
    'ret_dtime_from' => '00:00',
    'ret_dtime_to' => '00:00',
    'ret_atime_from' => '00:00',
    'ret_atime_to' => '00:00',
    'stopover_from' => '00:00',
    'stopover_to' => '00:00',
    'max_stopovers' => 2,
    'conn_on_diff_airport' => 1,
    'ret_from_diff_airport' => 1,
    'ret_to_diff_airport' => 1,
    'select_airlines' => 'FR,AA',
    'select_stop_airport' => 'BCN,FRA',
    'select_airlines_exclude' => false,
    'select_stop_airport_exclude' => false,
    'offset' => 0,
    'limit' => 30,
    'sort' => 'price',
    'asc' => 1,
]);

