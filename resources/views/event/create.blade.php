@extends('layout.parent')

@section('content')
    <div id="content">



        <form action="{{url('event/create')}}" method="post" enctype="multipart/form-data">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <label>Event Name</label>
            <input type="text" name="event_name"required>
            <label>Event Hashtag</label>
            <input type="text" name="hashtag"required>


        <br>

            <div class="form-group">
                <label for="comment">Description:</label>
                <textarea class="form-control" rows="5" name="event_description" required></textarea>
            </div>
            Select image to upload:
            <input type="file" name="event_image" id="fileToUpload" required> 
            <br>
            <input type="submit" value="Add Event" name="submit">
        </form>





    </div>

@endsection
