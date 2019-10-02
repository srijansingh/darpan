<?php

namespace App\Http\Controllers;

use App\Sponsor;
use Illuminate\Http\Request;

class SponsorController extends Controller
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
        $sponsor=Sponsor::all();

        return view('admin.sponsor.index',compact('sponsor'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.sponsor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'name'=>'required',
            'image' => 'mimes:jpeg,jpg,png|required|max:10000',
            'status'=>'required',
        ]);

        $input = $request->all();

        if($file=$request->file('file'))
        {
            $name=$file->getClientOriginalName();
            $file->move("srijan",$name);
            $input['image']=$name;

        }
        Sponsor::create($input);
        return redirect('sponsor/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sponsor=Sponsor::findOrFail($id);

        return view('admin.sponsor.show',compact('sponsor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sponsor=Sponsor::findOrFail($id);

        return view('admin.sponsor.edit',compact('sponsor'));
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
        $sponsor=Sponsor::findOrFail($id);
        $sponsor->update($request->all());
        //return
        return redirect('/sponsor');
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
