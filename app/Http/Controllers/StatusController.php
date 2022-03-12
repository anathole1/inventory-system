<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;
use Auth;
use Session;

class StatusController extends Controller
{
    public function __construct() {
        $this->middleware(['auth'])->except('index', 'show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index() {
        $status = Status::orderby('id', 'desc')->paginate(5); //show only 5 items at a time in descending order

        return view('status.index')->with('status', $status);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('status.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) { 

    //Validating title and body field
        $this->validate($request, [
            'sname'=>'required|max:100',
            ]);

        $sname = $request['sname'];

        $status = Status::create($request->only('sname'));

    //Display a successful message upon save
        return redirect()->route('status.index')
            ->with('flash_message', 'status, '. $status->sname.' created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $status = Status::findOrFail($id); //Find status of id = $id

        return view ('status.show', compact('status'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $status = Status::findOrFail($id);

        return view('status.edit', compact('status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $this->validate($request, [
            'sname'=>'required|max:100',
            
        ]);

        $status = Status::findOrFail($id);
        $status->sname = $request->input('sname');
        $status->save();

        return redirect()->route('status.show', 
            $status->id)->with('flash_message', 
            'status, '. $status->sname.' updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $status = Status::findOrFail($id);
        $status->delete();

        return redirect()->route('status.index')
            ->with('flash_message',
             'Status successfully deleted');

    }
}
