@extends('layout.parent')

@section('content')
    <div id="content">



        <form action="{{url('speaker/create')}}" method="post" enctype="multipart/form-data">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <select name="Event_id"  class="disable" style="width:400px;">
                @foreach($Events as $event)
                <option value="{{$event->id}}">{{$event->event_name}}</option>

                @endforeach
            </select>
            <label>Speaker Name</label>
            <input type="text" name="name"required>
            <label>Speaker Title</label>
            <input type="text" name="title">


        <br>

            <div class="form-group">
                <label for="comment">Description:</label>
                <textarea class="form-control" rows="5" name="description"required></textarea>
            </div>
            Select image to upload:
            <input type="file" name="image" id="fileToUpload"required>
            <br>
            <input class="btn btn-primary" type="submit" value="Add Speaker" name="submit">
        </form>





    </div>

@endsection
