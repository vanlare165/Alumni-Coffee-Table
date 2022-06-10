@extends('layout.parent')

@section('content')
    <div id="content">



        <form action="{{route('updateSchedule',$id)}}" method="post" enctype="multipart/form-data">

            <input type="hiden" name="event_id" value="{{$Schedule->event_id}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            {{method_field('put')}}


            <br>

            <label for="comment">Schedule 1:</label>
            <textarea class="form-control" rows="2" name="schedule_1">{{$Schedule->schedule_1}}</textarea>
            <label for="comment">Schedule 2:</label>
            <textarea class="form-control" rows="2" name="schedule_2">{{$Schedule->schedule_2}}</textarea>
            <label for="comment">Schedule 3:</label>
            <textarea class="form-control" rows="2" name="schedule_3">{{$Schedule->schedule_3}}</textarea>
            <label for="comment">Schedule 4:</label>
            <textarea class="form-control" rows="2" name="schedule_4">{{$Schedule->schedule_4}}</textarea>
            <label for="comment">Schedule 5:</label>
            <textarea class="form-control" rows="2" name="schedule_5">{{$Schedule->schedule_5}}</textarea>
            <label for="comment">Schedule 6:</label>
            <textarea class="form-control" rows="2" name="schedule_6">{{$Schedule->schedule_6}}</textarea>
            <label for="comment">Schedule 7:</label>
            <textarea class="form-control" rows="2" name="schedule_7">{{$Schedule->schedule_7}}</textarea>
            <label for="comment">Schedule 8:</label>
            <textarea class="form-control" rows="2" name="schedule_8">{{$Schedule->schedule_8}}</textarea>
            <br>
            <input class="btn btn-primary" type="submit" value="Edit Event" name="submit">


        </form>




    </div>

@endsection
