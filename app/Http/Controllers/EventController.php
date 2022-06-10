<?php

namespace App\Http\Controllers;
use App\Event;
use App\Speaker;
use App\schedule;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Http\Requests;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $Events = Event::all();
        return view('event.index',compact('Events'));




    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $images = $request->file('event_image'); //get from form
        $input['imagename'] = $images->getClientOriginalName();//get the original name of the upload file
        $destinationPath = public_path('/images');//declare image path dyan ma pupunta yung pic
        $images->move($destinationPath,$input['imagename']);//file move to images folder
        $image = $request->file('event_image')->getClientOriginalName();//get the original name of the upload file para ma call sa baba
        $Events = new Event;
        $Events->event_name = request('event_name');
        $Events->event_hashtag = request('hashtag');
        $Events->event_image = $image;
        $Events->event_description= request('event_description');
        $Events->save();//save to database
        return redirect()->route('event')->with('message','item has been added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $Events = Event::find($id);
       return view('event.edit',compact('Events','id'));
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
        $this->validate($request,[
        'event_name' => 'required',
            'hashtag' =>'required',
            'event_description' => 'required',

        ]);
            if(!empty($request->event_image)){
                $images = $request->file('event_image'); //get from form
                $input['imagename'] = $images->getClientOriginalName();//get the original name of the upload file
                $destinationPath = public_path('/images');//declare image path dyan ma pupunta yung pic
                $images->move($destinationPath,$input['imagename']);//file move to images folder
                $image = $request->file('event_image')->getClientOriginalName();//get the original name of the upload file para ma call sa baba

                $Events = Event::find($id);
                $Events->event_name = request('event_name');
                $Events->event_hashtag = request('hashtag');
                $Events->event_description =request('event_description');
                $Events->event_image = $image;
                $Events->save();
                return redirect()->route('event')->with('message','item has been edited');
            }else
                {
                    $Events = Event::find($id);
                    $Events->event_name = request('event_name');
                    $Events->event_hashtag = request('hashtag');
                    $Events->event_description =request('event_description');
                    $Events->save();
                    return redirect()->route('event')->with('message','item has been Edited!');

                }



    }

    /**
     * Remove the specified resource from storage.
     *['event_name','event_hashtag','event_description','event_image'];
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Events = Event::find($id);
        Speaker::where('event_id',$id)->delete();
        Schedule::where('event_id',$id)->delete();
        $Events->delete();
        return redirect()->route('event')->with('message','item has been Deleted!');
    }
}
