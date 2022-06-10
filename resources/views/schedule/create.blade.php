@extends('layout.parent')

@section('content')
    <div id="content">



        <form action="{{url('schedule/create')}}" method="post" enctype="multipart/form-data">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <select name="Event_id"  class="disable" style="width:400px;">
                @foreach($Events as $event)
                <option value="{{$event->id}}">{{$event->event_name}}</option>

                @endforeach
            </select>
            <br>
            <label for="comment">Schedule 1:</label>
            <textarea class="form-control" rows="2" name="schedule_1"></textarea>
            <label for="comment">Schedule 2:</label>
            <textarea class="form-control" rows="2" name="schedule_2"></textarea>
            <label for="comment">Schedule 3:</label>
            <textarea class="form-control" rows="2" name="schedule_3"></textarea>
            <label for="comment">Schedule 4:</label>
            <textarea class="form-control" rows="2" name="schedule_4"></textarea>
            <label for="comment">Schedule 5:</label>
            <textarea class="form-control" rows="2" name="schedule_5"></textarea>
            <label for="comment">Schedule 6:</label>
            <textarea class="form-control" rows="2" name="schedule_6"></textarea>
            <label for="comment">Schedule 7:</label>
            <textarea class="form-control" rows="2" name="schedule_7"></textarea>
            <label for="comment">Schedule 8:</label>
            <textarea class="form-control" rows="2" name="schedule_8"></textarea>



    <br>


            <br>
            <input class="btn btn-primary" type="submit" value="Add Scheduler" name="submit">
        </form>





    </div>

@endsection
