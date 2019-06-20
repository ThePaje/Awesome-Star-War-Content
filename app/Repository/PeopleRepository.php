<?php

namespace App\Repository;

use App\Resources\PeopleResource;

class PeopleRepository implements Repository
{
    protected $peopleResource;

	public function __construct(PeopleResource $peopleResource){
		$this->peopleResource = $peopleResource;

	}

	public function search($search, $page, $format){
		$people = $this->peopleResource->search($search, $page, $format);
		foreach ($people['results'] as $key => &$character) {
			preg_match("/[^\/]+$/",substr_replace($character['url'],"",-1), $matches);
			$character['id'] = $matches[0];
		}
		return $people;
	}

	public function find($id, $format){
		$character = $this->peopleResource->find($id,$format);

		$homeworld = $this->findByUrl($character['homeworld']);

		$films = [];
		foreach ($character['films'] as $film_url) {
			$films[] = $this->findByUrl($film_url);
		}

		$species = [];
		foreach ($character['species'] as $specie_url) {
			$species[] = $this->findByUrl($specie_url);
		}

		$vehicles = [];
		foreach ($character['vehicles'] as $vehicle_url) {
			$vehicles[] = $this->findByUrl($vehicle_url);
		}

		$starships = [];
		foreach ($character['starships'] as $starship_url) {
			$starships[] = $this->findByUrl($starship_url);
		}

		return ['character'=>$character, 'homeworld'=>$homeworld, 'films'=>$films, 'species'=>$species, 'vehicles'=>$vehicles, 'starships'=>$starships];
	}

	public function findByUrl($url, $format = ''){
		return $this->peopleResource->findByUrl($url);
	}

}
