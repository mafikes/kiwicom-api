<?

namespace Mafikes\KiwiApi;

use GuzzleHttp;
use Mafikes\KiwiApi\Model\Locations;

class Client
{

    const ENDPOINT = "https://api.skypicker.com";

    private $client;

    public function __construct()
    {
        $this->client = new GuzzleHttp\Client([
            'base_uri' => self::ENDPOINT
        ]);
    }

    public function getlocations(Locations $locations)
    {
        return $locations;
    }

    /**
     * @param $uri
     * @return mixed
     * @throws GuzzleHttp\Exception\GuzzleException
     */
    public function get($uri, $query = [])
    {
        $response = $this->client->request('GET', $uri, [
            'query' => $query
        ]);

        return json_decode($response->getBody()->getContents(), 1);
    }

    /**
     * @param $uri
     */
    public function post($uri)
    {

    }
}