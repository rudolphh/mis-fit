<?php

namespace App\Http\Controllers\User;

use App\Measurement;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\EditMeasurementRequest as EditMeasurement;
use App\Http\Requests\CreateMeasurementRequest as CreateMeasurement;



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
        // GET
        $content_title = "Measurements";
        $user = $request->user();
        $measurements = $user->measurements()->get();
        return view('measure.index', compact('content_title', 'user', 'measurements'))
            ->with('create_new', true);
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
        $measurement= new Measurement;
        $user = Auth()->user();

        return view('forms.measurement', compact('content_title', 'user', 'measurement'))
            ->with('create', true)
            ->with('cancel_new', true);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateMeasurement $request)
    {
        // POST - if here, validation passed
        $user = Auth()->user();
        $new_measurement = new Measurement($request->all());
        $user->measurements()->save($new_measurement);
        
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
        // GET
        return "show measurement by {$id}";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // GET
        $content_title = "Edit Measurement";
        $user = Auth()->user();
        $measurement = $user->measurements()->find($id);

        // if the auth user doesn't have a measurement with that id, reroute
        if (is_null($measurement)) {
            return redirect()->route('measurements.index');
        }

        return view('forms.measurement', compact('content_title', 'user', 'measurement'))
            ->with('edit', true)
            ->with('cancel_new', true);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditMeasurement $request, $id)
    {

        // POST for edit
        $user = Auth()->user();
        $input = $request->all();
        $measurement = $user->measurements()->find($id);

        if(is_null($measurement)){
            return redirect()->route('measurements.index');
        }
        else {
        
            $input['user_id'] = $user->id;
            $measurement->update($input);
        
            session()->flash('success', 'Measurement Updated.');
            //session()->flash('flash_message_important','');
            
            return redirect()->route('measurements.index'); 
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
        
        // POST for delete
        $user = Auth()->user();
        $measurement = $user->measurements()->find($id);

        if(is_null($measurement)){
            return redirect()->route('measurements.index');
        }
        else {

            $measurement->delete();
        
            session()->flash('info', 'Measurement Destroyed.');
            //session()->flash('flash_message_important','');
            
            return redirect()->route('measurements.index'); 
        }
    }
}
