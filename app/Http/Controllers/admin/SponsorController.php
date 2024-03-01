<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Sponsor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SponsorController extends Controller
{
    protected $panel = 'admin.components.sponsor.';
    protected $route = 'sponsor.';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sponsor = Sponsor::all();
        return view($this->panel.'index',compact('sponsor'));
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
        $request->validate([
            'image' => 'required',
            'name' => 'required',
            'link' => 'required',
        ]);

        $data = new Sponsor();
        $data->companyname = $request->name;
        $data->link = $request->link;
        if(request()->image){
                $filename = rand(0000,9999).'_'.time().'.'.$request->image->getClientOriginalExtension();
                $data->url = 'assets/uploads/sponsor/'.$filename;
                $request->image->move('assets/uploads/sponsor',$filename);
                $data->save();

            }
        return redirect()->route($this->route.'index')->with('status','Created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sponsor = Sponsor::findorfail($id);
        return view($this->panel.'edit',compact('sponsor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Sponsor::findorfail($id);
        $data->companyname = $request->name;
        $data->link = $request->link;
        if(request()->image){
            $destination = $data->url;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $filename = rand(0000,9999).'_'.time().'.'.$request->image->getClientOriginalExtension();
            $data->url = 'assets/uploads/sponsor/'.$filename;
            $request->image->move('assets/uploads/sponsor',$filename);
            $data->save();

        }
    return redirect()->route($this->route.'index')->with('status','Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Sponsor::findorfail($id);
        $destination = $data->url;
            if(File::exists($destination)){
                File::delete($destination);
            }
        $data->delete();
    return redirect()->route($this->route.'index')->with('status','Deleted successfully');

    }
}
