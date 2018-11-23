<?php

namespace Mafikes\KiwiApi\Services;

use Mafikes\KiwiApi\Client;

/**
 * Class Flights
 * Doc: https://docs.kiwi.com/locations/
 *
 * @package Mafikes\KiwiApi\Model
 */
class Flights implements IService
{
    private $client;

    /**
     * Service constructor.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @param $data
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function searchByQuery($data)
    {
        return $this->client->get('flights', $data);
    }

}