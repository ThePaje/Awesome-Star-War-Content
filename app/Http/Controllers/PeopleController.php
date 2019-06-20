<?php

namespace App\Http\Controllers;

use App\Repository\PeopleRepository;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
	protected $peopleRepository;

	public function __construct(PeopleRepository $peopleRepository){
		$this->peopleRepository = $peopleRepository;
	}

	public function index(Request $request){
		$search = $request->get('search') ?? '';
		$page = $request->get('page') ?? '';
		$format = $request->get('format') ?? '';
		$searched = $this->peopleRepository->search($search,$page,$format);

		$next_page =  empty($searched['next']) ? null : get_page_from_url($searched['next']);
		$previous_page =  empty($searched['previous']) ? null : get_page_from_url($searched['previous']);

		$result = ['people'=>$searched, 'next_page'=>$next_page, 'previous_page'=>$previous_page, 'search'=> $search, 'format' => $format];

		return view('people.index',$result);
	}

	public function find(int $id,Request $request){
		$format = $request->get('format') ?? '';
		$item = $this->peopleRepository->find($id,$format);

		$result['character'] = $item['character'];
		$result['character']['homeworld_name'] = $item['homeworld']['name'];
		$result['character']['films_title'] = get_imploded_attribute($item['films'],'title');
		$result['character']['species_name'] = get_imploded_attribute($item['species'],'name');
		$result['character']['vehicles_name'] = get_imploded_attribute($item['vehicles'],'name');
		$result['character']['starships_name'] = get_imploded_attribute($item['starships'],'name');
		return view('people.show',$result);
	}

}
