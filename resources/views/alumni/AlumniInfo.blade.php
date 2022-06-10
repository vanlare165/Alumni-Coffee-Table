@extends('layout.parent')
@section('content')
<div id="content">

@foreach($Alumni as $alumni)
<h1>Information</h1>
  <div class="row">
  <div class="col-md-6">
<img src="{{ url('/images/'.$alumni->picture) }}" alt="Trulli" width="600" height="700"><br>
</div>
        <div class="col-md-3">
            <h6 style="text-align:left;">First Name: {{$alumni->FirstName}}  </h6><br>
        
            <h6 style="text-align:left;">Last Name:  {{$alumni->LastName}}</h6><br>
        
            <h6 style="text-align:left;">Middle Name: {{$alumni->MiddleName}}</h6><br>
     
            <h6 style="text-align:left;">Tel. No.:  {{$alumni->TelNum}}</h6><br>
    
            <h6 style="text-align:left;">Present Address:  {{$alumni->Address}}</h6><br>

            <h6 style="text-align:left;">Mobile No.:  {{$alumni->MobileNo}}</h6><br>

            <h6 style="text-align:left;">Birthdate:  {{$alumni->BirthDate}}</h6><br>
    
            <h6 style="text-align:left;">Civil status:  {{$alumni->CivilStat}}</h6><br>
 
            <h6 style="text-align:leftr;">Age:  {{$alumni->Age}}</h6><br>
  
      
            <h6 style="text-align:left;">Gender:  {{$alumni->Gender}}</h6><br>
        
            <h6 style="text-align:left;">Religion:  {{$alumni->Religion}}</h6><br>
        
            <h6 style="text-align:left;">Citizenship:  {{$alumni->Citizenship}}</h6><br>
        
            <h6 style="text-align:left;">Email Address:  {{$alumni->EmailAdd}}</h6><br>
     

            <h6 style="text-align:left;">level completed in N.U:  {{$alumni->GraduatedLvl}}</h6><br>
            
            
            
     
            <h6 style="text-align:left;">Course:  {{$alumni->Course}}</h6><br>
            
            <h6 style="text-align:left;">Year Graduated:   {{$alumni->YearGrad}}</h6><br>
      
            <h6 style="text-align:left;">Company Connected present:  {{$alumni->Company}}</h6><br>
         
            <h6 style="text-align:left;">Company Address:  {{$alumni->CompanyAdd}}</h6><br>
        
            <h6 style="text-align:left;">Position:  {{$alumni->ComPosition}}</h6><br>
     </div>

</div>

</div>
@endforeach

        @endsection
