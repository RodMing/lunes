<?php

namespace App\Services;

use \GuzzleHttp\Client;

class Chain
{
	private $client;

	const BTC_URL = 'https://chain.so/api/v2/get_price/BTC/USD';
	const LTC_URL = 'https://chain.so/api/v2/get_price/LTC/USD';
	const BTC_HIST_URL = 'https://chain.so/api/v2/get_tx_received/BTC/';

	public function __construct(Client $client)
	{
		$this->client = $client;
		// https://chain.so/api/v2/get_price/<BTC ou LTC>/USD
	}

	public function getBitcoinPrice()
	{
		$response = json_decode(
			$this->client->get(self::BTC_URL)->getBody()->getContents()
		);

		foreach ($response->data->prices as $key => $value) {
            if ($value->exchange === 'bitfinex') {
                return $value;
            }
        }

		return null;
	}

	public function getLitecoinPrice()
	{
		$response = json_decode(
			$this->client->get(self::LTC_URL)->getBody()->getContents()
		);

		foreach ($response->data->prices as $key => $value) {
            if ($value->exchange === 'bitfinex') {
                return $value;
            }
        }

		return null;
	}

	public function getBitcoinHist($endereco)
	{
		return json_decode(
			$this->client->get(self::BTC_HIST_URL . $endereco)->getBody()->getContents(),
			true
		);
	}
}