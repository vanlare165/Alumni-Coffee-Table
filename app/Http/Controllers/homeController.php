<?php

namespace App\Http\Controllers;
use App\schedule;
use App\Speaker;
use App\Event;
use App\Http\Requests;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }
    public function logout () {
        //logout user
        auth()->logout();
        // redirect to homepage
        return redirect('/');
    }
    public function home()
    {
        $Events = Event::first();

        $Speakers = Speaker::where('event_id',$Events->id)->get();
        $Schedules = schedule::where('event_id',$Events->id)->get();

        return view('home.homePage',compact('Events','Speakers','Schedules'));
    }
    public function search(Request $request)
    {
        $Event = new Event;

        $search = $request->get('search');
        $Events = Event::where('event_name',$search)->get()->first();
        if($Events == null){
            return redirect()->route('home')->with('message','No query found!');
        }else{

            $Schedules = schedule::where('event_id',$Events->id)->get();
        $Speakers = Speaker::where('event_id',$Events->id)->get();
        return view('home.homePage',compact('Events','Speakers','Schedules'));
        }

    }
}
