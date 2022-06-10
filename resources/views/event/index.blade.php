@extends('layout.parent')

@section('content')


    <table class="table">
        <td>@if(Session::has('message'))
                <div class="alert alert-primary">{{Session::get('message')}}</div><td>
            @endif
        <thead class="thead-dark">
        <tr>
            <th scope="col">Event Picture</th>
            <th scope="col">Event Name</th>
            <th scope="col">Hastag</th>
            <th scope="col">Description</th>
            <th scope="col">Option</th>
            <th scope="col">Schedule</th>
            <th scope="col">Speaker</th>


        </tr>
        </thead>
        <tbody>

        </tbody>

        @foreach($Events as $event)
            <tr>
                <td><img src="{{ url('/images/'.$event->event_image) }}" class="img-thumbnail" width="75"></td>
                <td>{{$event->event_name}}</td>
                <td>{{$event->event_hashtag}}</td>
                <td>{{$event->event_description}}</td>
                
                <td><a href="{{ route('EditEvent', ['id' => $event->id]) }}" class="btn btn-primary">Edit</a>|<a href="{{ route('DeleteEvent', ['id' => $event->id]) }}" class="btn btn-primary">Delete</a></td>
                <td><a href="{{ route('CreateSchedule', ['id' => $event->id]) }}" class="btn btn-primary">Add Schedule</a>|<a href="{{ route('schedule', ['id' => $event->id]) }}" class="btn btn-primary">view</a></td>
                <td><a href="{{ route('CreateSpeaker', ['id' => $event->id]) }}" class="btn btn-primary">Add</a>|<a href="{{ route('speaker', ['id' => $event->id]) }}" class="btn btn-primary">view</a></td>

            </tr>
        @endforeach
        <td><a href="{{ url('event/create') }}" class="btn btn-primary">Add Event</a></td>


    </table>

    @endsection
