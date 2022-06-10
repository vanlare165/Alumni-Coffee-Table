@extends('layout.parent')

@section('content')
    <div id="content">



        <form action="{{route('updateSpeaker',$id)}}" method="post" enctype="multipart/form-data">

            <input type="hiden" name="event_id" value="{{$Speakers->event_id}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            {{method_field('put')}}

            <label>Speaker Name</label>
            <input type="text" name="name" value="{{$Speakers->name}}">
            <label>title</label>
            <input type="text" name="title" value="{{$Speakers->title}}">


            <br>

            <div class="form-group">
                <label for="comment">Description:</label>
                <textarea class="form-control" rows="5" name="description">{{$Speakers->description}}</textarea>
            </div>
            Select image to upload:
            <input type="file" name="image" id="fileToUpload" value="{{$Speakers->picture}}">
            <br>
            <input class="btn btn-primary" type="submit" value="Edit Event" name="submit">


        </form>




    </div>

@endsection
