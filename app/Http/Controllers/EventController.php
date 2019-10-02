<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
//        return 'Its working';
        $event= Event::all();
        return view('admin.event.index',compact('event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'name'=>'required',
            'description'=>'required',
            'image'=>'required',

            'venue'=>'required',
            'time'=>'required',
            'regFee'=>'required',
            'status'=>'required',
        ]);



        $input = $request->all();

        if($file=$request->file('image'))
        {
            $name=$file->getClientOriginalName();
            $file->move("srijan",$name);
            $input['image']=$name;

        }
        Event::create($input);
        return redirect('event/create');
    }

    /*
     *
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $event = Event::findOrFail($id);
        return view('admin.event.show',compact('event'));

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
        $event=Event::findOrFail($id);

        return view('admin.event.edit',compact('event'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        // return "its working";
        //return $request->all();
        $event=Event::findOrFail($id);
        $event->update($request->all());
        //return
        return redirect('/event');

    }

    /*
     *
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $event=Event::findOrFail($id);
        $event->delete($id);
        return redirect('/event');
    }
}
