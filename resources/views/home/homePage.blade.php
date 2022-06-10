@extends('layout.home')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="header" id="myHeader">

        <h2 class="logo">National University</h2>
        <input type="checkbox" id="chk">
        <label for="chk" class="show-menu-btn">
            <i class="fas fa-ellipsis-h"></i>

        </label>
        <form action="{{url('search')}}" method="get">

        <div class="menu" id="navbar">


            <a href="#section1">Event</a>
            <a href="#section2">Schedule</a>
            <a href="#section3">Speakers</a>
            <label>Event Name</label> <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
            

            <a href="#"></a>

        </form>

            <label for="chk" class="hide-menu-btn">
                <i class="fas fa-times"></i>
            </label>
        </div>
    </div>



    <div class="pimg1" id="section1">

        <img src="{{ asset('images/'.$Events->event_image) }}" alt="image_1" width="100%" height="700px" style="opacity:0.8;">
        <div class="vl"></div>
       
        <div class="text">
      
        <td>@if(Session::has('message'))
        
        <div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  {{Session::get('message')}}
</div>
            @endif
            </td>
            <br>
            <h1>{{$Events->event_name}}</h1>

            <h2>{{$Events->event_hashtag}}</h2>
            

        </div>


        <div class="text-block">
        @foreach($Schedules as $schedule)
            <p>OCT, 20, 2018 {{$schedule->schedule_1}} AM(MASS)</p>
            <p>                       {{$schedule->schedule_1}}({{$Events->event_name}})</p>
        </div>
        <a href="{{ route('CreateAlumni', ['id' => $Events->id]) }}" class="button1">Register</a>

        <div class="ptext">
        </div>


    </div>


    <div class="pimg2" id="section2">
  
        <img src="{{ asset('images/16.jpg') }}" alt="image_1" width="100%" height="1080px" style="opacity:0.8;">
        <div class="text1">
            <h1 font-style="bold">SCHEDULE</h1>
            <br>
            <br>
            <h1>Mass</h1>
            <br>
            <h1>{{$schedule->schedule_1}}</h1>
            <br>
            <h1>Registration</h1>
            <br>
            <h1>{{$schedule->schedule_2}}</h1>
            <br>
            <h1>Fellowship</h1>
            <br>
            <h1>{{$schedule->schedule_3}}</h1>
            <br>
            <h1>Raffle</h1>
           
            <h1>Closing</h1>
            <br>
            <h1>{{$schedule->schedule_7}}</h1>




        </div>
        @endforeach
    </div>

    <div class="pimg3" id="section3">



        <div class="row">

        @foreach($Speakers as $speaker)
            <div class="column">
                <h1>Speaker</h1>

                <img src ="{{ url('/images/'.$speaker->picture) }}" alt="Trulli" width="600" height="600">
            </div>
            <link rel="stylesheet" href="{{ asset('/css/style1.css') }}">
            <div class="column">
                <h1>{{$speaker->name}}</h1>
                <h3>{{$speaker->title}}</h3>
                <br>
                <br>
                <h3>Description</h3>
                <p>{{$speaker->description}}</p>
            </div>
            @endforeach
        </div>



<footer></footer>


    @endsection