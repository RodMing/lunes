<?php

namespace App\Services;

use \GuzzleHttp\Client;

class Chain
{
	private $client;

	const BTC_PRICE_URL = 'https://chain.so/api/v2/get_price/BTC/USD';
	const LTC_PRICE_URL = 'https://chain.so/api/v2/get_price/LTC/USD';
	const BTC_TX_URL = 'https://chain.so/api/v2/get_tx_received/BTC/';
	const LTC_TX_URL = 'https://chain.so/api/v2/get_tx_received/LTC/';

	public function __construct(Client $client)
	{
		$this->client = $client;
	}

	public function getPriceByCoin($coin)
	{
		return json_decode(
			$this->client->get(
				$this->getPriceUrlByCoin($coin)
			)->getBody()->getContents()
		);
	}

	public function getTcReceivedByCoinAndAddress($coin, $address)
	{
		if (empty($address)) {
			throw new \Exception('Invalid Address');			
		}

		return json_decode(
			$this->client->get(
				$this->getTxReceivedUrlByCoin($coin) . $address
			)->getBody()->getContents()
		);
	}

	private function getPriceUrlByCoin($coin)
	{
		switch (strtolower($coin)) {
			case 'btc':
				return self::BTC_PRICE_URL;
			case 'ltc':
				return self::LTC_PRICE_URL;
			default:
				throw new \Exception('Invalid coin');				
				break;
		}
	}

	private function getTxReceivedUrlByCoin($coin)
	{
		switch (strtolower($coin)) {
			case 'btc':
				return self::BTC_TX_URL;
			case 'ltc':
				return self::LTC_TX_URL;
			default:
				throw new \Exception('Invalid coin');				
				break;
		}
	}
}