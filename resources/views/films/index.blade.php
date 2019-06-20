@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Episode</th>
                        <th>Opening Crawl</th>
                        <th>Director</th>
                        <th>Producer</th>
                        <th>Release Date</th>
                        <th>Characters</th>
                        <th>Planets</th>
                        <th>Starships</th>
                        <th>Vehicles</th>
                        <th>Species</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($films['results'] as $film)
                    <tr>
                        <td>{{$film['title']}}</td>
                        <td>{{$film['title']}}</td>
                        <td>{{$film['title']}}</td>
                        <td>{{$film['title']}}</td>
                        <td>{{$film['title']}}</td>
                        <td>{{$film['title']}}</td>
                        <td>{{$film['title']}}</td>
                        <td>{{$film['title']}}</td>
                        <td>{{$film['title']}}</td>
                        <td>{{$film['title']}}</td>
                        <td>{{$film['title']}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
