<?php

namespace App\Http\Controllers;
use App\Event;
use App\Speaker;
use Illuminate\Http\Request;

use App\Http\Requests;

class speakerController extends Controller
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
    public function index($id)
    {
        $Speakers = Speaker::where('event_id',$id)->get();

        return view('speaker.index',compact('Speakers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function AddSpeaker(Request $request)
    {


    }
    public function create($id)
    {
        $Events = Event::where('id',$id)->get();
        return view('speaker.create',compact('Events'));

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
        $Speakers = new Speaker;
        $Speakers->name = request('name');
        $Speakers->title = request('title');
        $Speakers->picture = $image;
        $Speakers->description= request('description');
        $Speakers->event_id = request('Event_id');
        $Speakers->save();//save to database
        return redirect()->route('speaker',  $Speakers->event_id )->with('message','item has been added');
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
        $Speakers = Speaker::find($id);
        return view('speaker.edit',compact('Speakers','id'));
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
            'name' => 'required',
            'title' =>'required',
            'description' => 'required',

        ]);
        if(!empty($request->image)){
            $images = $request->file('image'); //get from form
            $input['imagename'] = $images->getClientOriginalName();//get the original name of the upload file
            $destinationPath = public_path('/images');//declare image path dyan ma pupunta yung pic
            $images->move($destinationPath,$input['imagename']);//file move to images folder
            $image = $request->file('image')->getClientOriginalName();//get the original name of the upload file para ma call sa baba

            $Speakers = Speaker::find($id);
            $Speakers->name = request('name');
            $Speakers->title = request('title');
            $Speakers->description =request('description');
            $Speakers->picture = $image;
            $Speakers->save();
            return redirect()->route('speaker',['id' => $Speakers->event_id])->with('message','item has been Edited!');
        }else
        {
            $Speakers = Speaker::find($id);
            $Speakers->name = request('name');
            $Speakers->title = request('title');
            $Speakers->description =request('description');

            $Speakers->save();
            return redirect()->route('speaker',['id' => $Speakers->event_id])->with('message','item has been Edited!');

        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Speakers = Speaker::find($id);
        $Speakers->delete();
        return redirect()->route('speaker',['id' => $Speakers->event_id])->with('message','item has been Deleted!');
    }
}

