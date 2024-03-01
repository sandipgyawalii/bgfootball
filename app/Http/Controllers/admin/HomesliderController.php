<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Homeslider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomesliderController extends Controller
{
    protected $panel = 'admin.components.homeslider.';
    protected $route = 'homeslider.';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $homeslider = Homeslider::all();
        return view($this->panel.'index',compact('homeslider'));
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
            'homeslider' => 'required',
        ]);

        $data = new Homeslider();
        if(request()->homeslider){
                $filename = rand(0000,9999).'_'.time().'.'.$request->homeslider->getClientOriginalExtension();
                $data->url = 'assets/uploads/homeslider/'.$filename;
                $request->homeslider->move('assets/uploads/homeslider',$filename);
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
        $slider = Homeslider::findorfail($id);
        return view($this->panel.'edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $slider = Homeslider::findorfail($id);
        if(request()->homeslider){
            $destination = $slider->url;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $filename = rand(0000,9999).'_'.time().'.'.$request->homeslider->getClientOriginalExtension();
            $slider->url = 'assets/uploads/homeslider/'.$filename;
            $request->homeslider->move('assets/uploads/homeslider',$filename);
            $slider->save();
        }
    return redirect()->route($this->route.'index')->with('status','Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider = Homeslider::findorfail($id);
        $destination = $slider->url;
            if(File::exists($destination)){
                File::delete($destination);
            }
        $slider->delete();
    return redirect()->route($this->route.'index')->with('status','Deleted successfully');

    }
}
