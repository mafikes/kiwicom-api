<?php

namespace Mafikes\KiwiApi;

use GuzzleHttp;

class Client
{
    const ENDPOINT = "https://api.skypicker.com";

    /**
     * @var GuzzleHttp\Client
     */
    private $client;

    /**
     * Client constructor.
     */
    public function __construct()
    {
        $this->client = new GuzzleHttp\Client([
            'base_uri' => self::ENDPOINT
        ]);
    }

    /**
     * @param $uri
     * @param array $query
     * @return mixed
     * @throws GuzzleHttp\Exception\GuzzleException
     */
    public function get($uri, $query = [])
    {
        try {
            $response = $this->client->request('GET', $uri, [
                'query' => $query
            ]);

            return json_decode($response->getBody()->getContents(), 1);
        } catch (GuzzleHttp\Exception\BadResponseException $badResponseException) {
            print $badResponseException->getMessage();
        }
    }

    /**
     * @param $name
     * @param $arguments
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        if (preg_match('/^(get)(?<method>[a-zA-Z]+)$/', $name, $matches))
        {
            $classMap = 'Mafikes\\KiwiApi\\Services\\'.$matches['method'];
            return new $classMap($this);
        }
    }
}
