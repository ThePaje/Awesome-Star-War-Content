<?php

namespace App\Http\Controllers;

use App\Repository\FilmsRepository;
use Illuminate\Http\Request;

class FilmsController extends Controller
{
	protected $filmsRepository;

	public function __construct(FilmsRepository $filmsRepository){
		$this->filmsRepository = $filmsRepository;
	}

	public function index(Request $request){
		$search = $request->get('search') ?? '';
		$format = $request->get('format') ?? '';
		$films = $this->filmsRepository->search($search,$format);
		// dd($films);
		$result = ['films'=>$films];

		return view('films.index',$result);
	}

	public function find(int $id,Request $request){
		$format = $request->get('format') ?? '';
		$film = $this->filmsRepository->find($id,$format);
		return $film;
	}

}
