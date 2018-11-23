<?php

namespace Mafikes\KiwiApi\Services;

use Mafikes\KiwiApi\Client;

/**
 * Class Locations
 * Doc: https://docs.kiwi.com/locations/
 *
 * @package Mafikes\KiwiApi\Model
 */
class Locations implements IService
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

    public function searchByQuery($data)
    {
        return $this->client->get('locations', $data);
    }

}