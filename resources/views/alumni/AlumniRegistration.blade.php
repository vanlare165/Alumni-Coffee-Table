@extends('layout.parent')

@section('content')
    <div id="content">



        <form action="{{url('alumni/create')}}" method="post" enctype="multipart/form-data">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <select name="Event_id"  class="disable" style="width:620px;">
                @foreach($Events as $event)
                    <option value="{{$event->id}}">{{$event->event_name}}</option>

                @endforeach
            </select><br>
            <div class="row">
                <div class="col-md-3">
                <label>First Name</label><br>
            <input type="text" name="name" >
            </div>
                <div class="col-md-3">
                <label>Last Name</label><br>
            <input type="text" name="lastName">
            </div>
            <div class="col-md-3">
            <label>Middle Name </label><br>
            <input type="text" name="middleName">
            </div>
            <div class="col-md-3">
            <label>Tel. No.</label><br>
            <input type="text" name="telNo"><br>
            </div>
            <div class="col-md-6">
            <label>Present Address</label><br>
            <input type="text" name="address"  size="71">
            </div>
            <div class="col-md-3">
            <label>Mobile No.</label><br>
            <input type="text" name="mobileNo">
            </div>
            <div class="col-md-3">
            <label>Birthdate</label><br>
            <input type="date" id="birthday" name="birthday">
            </div>
            <div class="col-md-3">
            <label>Civil status</label><br>
            <input type="text" name="civilStat">
            </div>
            <div class="col-md-3">
            <label>Age</label><br>
            <input type="text" name="Age">
            </div>
            <div class="col-md-3">
            <label>Gender</label><br>
            <input type="text" name="gender">
            </div>
            <div class="col-md-3">
            <label>Religion</label><br>
            <input type="text" name="religion">
            </div>
            <div class="col-md-3">
            <label>Citizenship</label><br>
            <input type="text" name="citizenship">
            </div>
            <div class="col-md-3">
            <label>Email Address</label><br>
            <input type="text" name="email">
            </div>
            <div class="col-md-3">
            <label>Course</label><br>
            <input type="text" name="course">
            </div>
            <div class="col-md-3">
            <label>Year Graduated </label><br>
            <input type="text" name="gradyear">
            </div>
            <div class="col-md-6">
            <label>Company Address</label><br>
            <input type="text" name="companyadd" size="71">
            </div>
            <div class="col-md-3">
            <label>Company Connected present</label><br>
            <input type="text" name="company">
            </div>
            
            <div class="col-md-3">
            <label>Position</label><br>
            <input type="text" name="position">
            </div>
          
            <div class="col-md-3">
            <br>
            <label>What level did you complete in N.U? Kindly check the box.</label>
            <br>
            <input type="checkbox" id="elementary" name="level" value="elementary">
            <label for="elementary"> Elementary</label>
            <input type="checkbox" id="highschool" name="level" value="highschool">
            <label for="highschool"> High School</label>
            <input type="checkbox" id="college" name="level" value="college">
            <label for="college"> College</label>
            <input type="checkbox" id="gradschool" name="level" value="gradschool"><br>
            <label for="gradschool">Graduate School</label>
            </div>
           </div>
           
            
            
           
            
            
            
            
          
        
            
            
           
           

           
           
           
            
           
           


            <br>

            Select image to upload:
            <input type="file" name="image" id="fileToUpload">
            <br>
            <input class="btn btn-primary" type="submit" value="Register" name="submit">
        </form>





    </div>

@endsection
