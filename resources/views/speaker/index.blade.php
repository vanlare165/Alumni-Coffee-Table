@extends('layout.parent')

@section('content')


    <table class="table">
        <td>@if(Session::has('message'))
                <div class="alert alert-primary">{{Session::get('message')}}</div><td>
            @endif
        <thead class="thead-dark">
        <tr>
            <th scope="col">Picture</th>
            <th scope="col">Speaker Name</th>
            <th scope="col">title</th>
            <th scope="col">Description</th>
            <th scope="col">Option</th>


        </tr>
        </thead>
        <tbody>

        </tbody>
        @foreach($Speakers as $speaker)
            <tr>
                <td><img src="{{ url('/images/'.$speaker->picture) }}" class="img-thumbnail" width="75"></td>
                <td>{{$speaker->name}}</td>
                <td>{{$speaker->title}}</td>
                <td>{{$speaker->description}}</td>
                <td><a href="{{ route('EditSpeaker', ['id' => $speaker->id]) }}" class="btn btn-primary">Edit</a>|<a href="{{ route('DeleteSpeaker', ['id' => $speaker->id]) }}" class="btn btn-primary">Delete</a></td>
            </tr>
        @endforeach



    </table>

    @endsection
