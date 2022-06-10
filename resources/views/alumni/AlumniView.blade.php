@extends('layout.parent')

@section('content')

    <table class="table">
        <td>@if(Session::has('message'))
                <div class="alert alert-primary">{{Session::get('message')}}</div><td>
            @endif
        <thead class="thead-dark">
        <tr>
            <th scope="col">Picture</th>
            <th scope="col">Name</th>
            <th scope="col">Details</th>
            <th scope="col"></th>


        </tr>
        </thead>
        <tbody>

        </tbody>
        @foreach($Alumni as $alumni)
            <tr>
                <td><img src="{{ url('/images/'.$alumni->picture) }}" class="img-thumbnail" width="75"></td>
                <td>{{$alumni->FirstName}}</td>
                <td>{{$alumni->LastName}}</td>
              
                <td><a href="{{ route('viewAlumni', ['id' => $alumni->id]) }}"  class="btn btn-primary">Information</a>
            </tr>
        @endforeach



    </table>


@endsection
