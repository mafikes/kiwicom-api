<?php

namespace Mafikes\KiwiApi\Services;

use Mafikes\KiwiApi\Client;

interface IService
{
    public function __construct(Client $client);
}