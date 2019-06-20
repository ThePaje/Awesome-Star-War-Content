<?php

namespace App\Resources;

class Resource
{
	protected $path;
	private $client;

	public function __construct(){
		$this->setClient();
	}

	private function setClient(){
		$this->client = new \GuzzleHttp\Client(['base_uri' => 'https://swapi.co/']);
	}

	private function getEndpoint(){
		return '/api/'.$this->path.'/';
	}	

	private function getContent(string $request_url, array $params = []){
		$response =  $this->client->request('GET', $request_url, ['query'=>$params])->getBody()->getContents();
		$content = json_decode($response,true);
		return $content;
	}

	public function search(string $search, string $page = '',string $format = ''){
		$request_url = $this->getEndpoint();
		$params['search'] = $search;
		$params['page'] = $page;
		$params['format'] = $format;
		$content = $this->getContent($request_url,$params);
		return $content;
	}

	public function find(int $id, string $format = ''){
		$request_url = $this->getEndpoint().$id.'/';
		$params['format'] = $format;
		$content = $this->getContent($request_url,$params);
		return $content;
	}

	public function findByUrl($url){
		$client = new \GuzzleHttp\Client();
		$response = $client->request('GET', $url)->getBody()->getContents();
		$content = json_decode($response,true);
		return $content;
	}
}
