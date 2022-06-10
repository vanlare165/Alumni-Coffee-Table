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
        @foreach($Schedule as $schedule)
            <tr>

                <td>{{$schedule->schedule_1}}</td>
                <td>{{$schedule->schedule_2}}</td>
                <td>{{$schedule->schedule_3}}</td>
                <td>{{$schedule->schedule_4}}</td>
                <td>{{$schedule->schedule_5}}</td>
                <td>{{$schedule->schedule_6}}</td>
                <td>{{$schedule->schedule_7}}</td>
                <td>{{$schedule->schedule_8}}</td>
                <td><a href="{{ route('EditSchedule', ['id' => $schedule->id]) }}" class="btn btn-primary">Edit</a>|<a href="{{ route('DeleteSchedule', ['id' => $schedule->id]) }}" class="btn btn-primary">Delete</a></td>
            </tr>
        @endforeach



    </table>

    @endsection
