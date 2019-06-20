@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Character profile: {{$character['name']}}</h1>
    

    <div class="row justify-content-center">
        <h3>Basic Info</h3>
        <div class="col-md-12">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <tbody>
                    <tr>
                        <td>Name</td>
                        <td>{{$character['name']}}</td>
                    </tr>
                    <tr>
                        <td>Height</td>
                        <td>{{$character['height']}}</td>
                    </tr>
                    <tr>
                        <td>Mass</td>
                        <td>{{$character['mass']}}</td>
                    </tr>

                    <tr>
                        <td>Hair Color</td>
                        <td>{{$character['hair_color']}}</td>
                    </tr>

                    <tr>
                        <td>Skin Color</td>
                        <td>{{$character['skin_color']}}</td>
                    </tr>

                    <tr>
                        <td>Eye Color</td>
                        <td>{{$character['eye_color']}}</td>
                    </tr>

                    <tr>
                        <td>Birth Year</td>
                        <td>{{$character['birth_year']}}</td>
                    </tr>

                    <tr>
                        <td>Gender</td>
                        <td>{{$character['gender']}}</td>
                    </tr>
                </tbody>
            </table>
            
        </div>
    </div>

    <div class="row justify-content-center">
        <h3>Additional Info</h3>
        <div class="col-md-12">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <tbody>
                    <tr>
                        <td>Homeworld</td>
                        <td>{{$character['homeworld_name']}}</td>
                    </tr>

                    <tr>
                        <td>Films</td>
                        <td>{{$character['films_title']}}</td>
                    </tr>

                    <tr>
                        <td>Species</td>
                        <td>{{$character['species_name']}}</td>
                    </tr>

                    <tr>
                        <td>Vehicles</td>
                        <td>{{$character['vehicles_name']}}</td>
                    </tr>

                    <tr>
                        <td>Starships</td>
                        <td>{{$character['starships_name']}}</td>
                    </tr>
                </tbody>
            </table>
            
        </div>
    </div>
</div>
@endsection
