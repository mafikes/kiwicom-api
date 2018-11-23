<?php

namespace Mafikes\KiwiApi\Services;

use Mafikes\KiwiApi\Client;

/**
 * Class Airlines
 * Doc: https://docs.kiwi.com/locations/
 *
 * @package Mafikes\KiwiApi\Model
 */
class Airlines implements IService
{
    private $client;

    const LINK_IMAGE = 'https://images.kiwi.com/airlines';

    /**
     * Service constructor.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getAll()
    {
        return $this->client->get('airlines');
    }

    /**
     * @param $id
     * @param $size
     * @return string
     */
    public function getImage($id)
    {
        return self::LINK_IMAGE.'/64/'.$id.'.png';
    }

}