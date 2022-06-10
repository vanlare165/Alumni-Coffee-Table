<?php

namespace App\Http\Controllers;

use App\Event;
use App\schedule;
use Illuminate\Http\Request;

use App\Http\Requests;

class scheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $Schedule = schedule::where('event_id',$id)->get();

        return view('schedule.index',compact('Schedule'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $Events = Event::where('id',$id)->get();
        return view('schedule.create',compact('Events'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Schedule = new Schedule;
        $Schedule->schedule_1 = request('schedule_1');
        $Schedule->schedule_2 = request('schedule_2');
        $Schedule->schedule_3 = request('schedule_3');
        $Schedule->schedule_4 = request('schedule_4');
        $Schedule->schedule_5 = request('schedule_5');
        $Schedule->schedule_6 = request('schedule_6');
        $Schedule->schedule_7 = request('schedule_7');
        $Schedule->schedule_8 = request('schedule_8');
        $Schedule->event_id = request('Event_id');
        $Schedule->save();//save to database
        return redirect()->route('schedule',  $Schedule->event_id )->with('message','item has been added');
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
        $Schedule = Schedule::find($id);
        return view('schedule.edit',compact('Schedule','id'));
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
        $Schedule = Schedule::find($id);
        $Schedule->schedule_1 = request('schedule_1');
        $Schedule->schedule_2 = request('schedule_2');
        $Schedule->schedule_3 = request('schedule_3');
        $Schedule->schedule_4 = request('schedule_4');
        $Schedule->schedule_5 = request('schedule_5');
        $Schedule->schedule_6 = request('schedule_6');
        $Schedule->schedule_7 = request('schedule_7');
        $Schedule->schedule_8 = request('schedule_8');
        $Schedule->save();//save to database
        return redirect()->route('schedule',['id' => $Schedule->event_id])->with('message','item has been Edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Schedule = Schedule::find($id);
        $Schedule->delete();
        return redirect()->route('schedule',['id' => $Schedule->event_id])->with('message','item has been Deleted!');
    }
}
