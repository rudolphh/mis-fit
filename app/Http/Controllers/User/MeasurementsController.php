<?php

namespace App\Http\Controllers\User;

use App\Measurement;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateMeasurementRequest;



class MeasurementsController extends Controller
{

    /** 
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $content_title = "Measurements";
        $user = $request->user();
        $measurements = $user->measurements()->get();
        return view('measure.index', compact('content_title', 'user', 'measurements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // GET 
        $content_title = "Add Measurement";
        $user= new Measurement;

        return view('forms.measurement', compact('content_title', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateMeasurementRequest $request)
    {
        // POST - if here, validation passed
        $user = Auth()->user();
        $input = new Measurement($request->all());
        $user->measurements()->save($input);
        
        session()->flash('success', 'New Measurement Added.');
        //session()->flash('flash_message_important','');
        
        return redirect()->route('measurements.index'); 


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
