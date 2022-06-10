<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use App\graduate;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class alumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
      
        $Alumni = graduate::all();
        return view('alumni.AlumniView',compact('Alumni'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $Events = Event::where('id',$id)->get();
        return view('Alumni.AlumniRegistration',compact('Events'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $images = $request->file('image'); //get from form
        $input['imagename'] = $images->getClientOriginalName();//get the original name of the upload file
        $destinationPath = public_path('/images');//declare image path dyan ma pupunta yung pic
        $images->move($destinationPath,$input['imagename']);//file move to images folder
        $image = $request->file('image')->getClientOriginalName();//get the original name of the upload file para ma call sa baba
        $Alumni = new graduate;
        $Alumni->event_id= request('Event_id');
        $Alumni->FirstName = request('name');
        $Alumni->LastName= request('lastName');
        $Alumni->MiddleName= request('middleName');
        $Alumni->TelNum = request('telNo');
        $Alumni->Address= request('address');
        $Alumni->MobileNo = request('mobileNo');
        $Alumni->BirthDate= request('birthday');
        $Alumni->CivilStat= request('civilStat');
        $Alumni->Age = request('Age');
        $Alumni->Gender= request('gender');
        $Alumni->Religion = request('religion');
        $Alumni->Citizenship= request('citizenship');
        $Alumni->EmailAdd = request('email');
        $Alumni->GraduatedLvl= request('level');
        $Alumni->Course = request('course');
        $Alumni->YearGrad= request('gradyear');
        $Alumni->Company= request('company');
        $Alumni->CompanyAdd = request('companyadd');
        $Alumni->ComPosition= request('position');
        $Alumni->picture = $image;
        $Alumni->save();//save to database
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $Alumni = graduate::where('id',$id)->get();
        return view('alumni.AlumniInfo',compact('Alumni'));
    }

    public function game()
    {
        return view('Alumni.AlumniInfo');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
