<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    protected $panel = 'admin.components.facility.';
    protected $route = 'facilitiesgit.';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $facility = Facility::all();
        return view($this->panel.'index',compact('facility'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view($this->panel.'create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([            
            'topics' => 'required|array',
            'topics.*.title' => 'required|string',
            'topics.*.details' => 'required|string',
            'title' => 'required',
            'banner' => 'required',
        ]);

        $save = new Facility();
        $save->title  = $request->title;
        $save->topics = json_encode($data['topics']);

        if(request()->banner){
            $bannername = rand(0000,9999).'_'.time().'.'.$request->banner->getClientOriginalExtension();
            $save->url = 'assets/uploads/facility/'.$bannername;
            $request->banner->move('assets/uploads/facility',$bannername);
        }else{
            $save->url = 'file';
        }
        $save->save();
        return redirect()->route($this->route.'index')->with('status','Created successfully');


    }

    /**
     * Display the specified resource.
     */
    public function show(Facility $facility)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Facility $facility)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Facility $facility)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Facility $facility)
    {
        //
    }
}
