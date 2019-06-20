@extends('layouts.app')

@section('content')
<div class="container">
    <h1>People</h1>
    <div class="row">
        <div class="col-md-12">
            <form action="">
                <div >
                    <label>Search:
                        <input type="search" name="search" class="form-control form-control-sm" placeholder="" value="{{$search}}">
                    </label>
                </div>
            </form>
        </div>
    </div>

    <div class="row justify-content-center">
        
        <div class="col-md-12">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Height</th>
                        <th>Mass</th>
                        <th>Hair Color</th>
                        <th>Skin Color</th>
                        <th>Eye Color</th>
                        <th>Birth Year</th>
                        <th>Gender</th>
                        <th>See More</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($people['results'] as $character)
                    <tr>
                        <td>{{$character['name']}}</td>
                        <td>{{$character['height']}}</td>
                        <td>{{$character['mass']}}</td>
                        <td>{{$character['hair_color']}}</td>
                        <td>{{$character['skin_color']}}</td>
                        <td>{{$character['eye_color']}}</td>
                        <td>{{$character['birth_year']}}</td>
                        <td>{{$character['gender']}}</td>
                        <td> <a href="{{ url('/people/'.$character['id']) }}">Here</a> </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            @include('components.pagination')
            
        </div>
    </div>
</div>
@endsection
