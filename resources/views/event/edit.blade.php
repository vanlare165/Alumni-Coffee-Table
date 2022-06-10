@extends('layout.parent')

@section('content')
    <div id="content">



        <form action="{{route('updateEvent',$id)}}" method="post" enctype="multipart/form-data">


            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            {{method_field('put')}}

            <label>Event Name</label>
            <input type="text" name="event_name" value="{{$Events->event_name}}">
            <label>Event Hashtag</label>
            <input type="text" name="hashtag" value="{{$Events->event_hashtag}}">


            <br>

            <div class="form-group">
                <label for="comment">Description:</label>
                <textarea class="form-control" rows="5" name="event_description">{{$Events->event_description}}</textarea>
            </div>
            Select image to upload:
            <input type="file" name="event_image" id="fileToUpload" value="{{$Events->event_image}}">
            <br>
            <input class="btn btn-primary" type="submit" value="Edit Event" name="submit">


        </form>




    </div>

@endsection
