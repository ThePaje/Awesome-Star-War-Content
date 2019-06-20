<?php

namespace App\Repository;

use App\Resources\FilmsResource;

class FilmsRepository implements Repository
{
	protected $peopleRepository;

	protected $filmsResource;

	public function __construct(FilmsResource $filmsResource){
		$this->filmsResource = $filmsResource;
	}

	public function search($search, $format=""){
		$film = $this->filmsResource->search($search,$format);
		return $film;
	}

	public function find($id, $format=""){
		$film = $this->filmsResource->find($id,$format);
		return $film;
	}

	public function findByUrl($url, $format=""){
		return $this->filmsResource->findByUrl($url);
	}



}
