<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    protected $panel = 'admin.components.about.';
    protected $route = 'about.';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::all();
        return view($this->panel.'index',compact('about'));
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
            'description' => 'required',
        ]);

        $data = new About();
        $data->description = $request->description;

        if (request()->image) {
            foreach($request->image as $image){
                $filename = rand(0000,9999) . '_' . time() . '.' . $image->getClientOriginalExtension();
                $image->move('assets/uploads/about', $filename); 
                $multiple_image = new Image();
                $multiple_image->url = 'assets/uploads/about/'.$filename;
                $multiple_image->section = 'about';
                $multiple_image->save();
            }
        }
        $data->save();
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
        $about = About::findorfail($id);
        $about_images = Image::where('section','about')->get();
        return view($this->panel.'edit',compact('about','about_images'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'description' => 'required',
        ]);
        $data = About::findorfail($id);
        $data->description = $request->description;
        if(request()->image){
            foreach($request->image as $image){
                $filename = rand(0000,9999) . '_' . time() . '.' . $image->getClientOriginalExtension();
                $image->move('assets/uploads/about', $filename); 
                $multiple_image = new Image();
                $multiple_image->url = 'assets/uploads/about/'.$filename;
                $multiple_image->section = 'about';
                $multiple_image->save();
            }
        }
        $data->save();
    return redirect()->route($this->route.'index')->with('status','Updated successfully');
    }


    public function imagedelete($id)
    {
        $image = Image::findorfail($id);
        $destination = $image->url;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $image->delete();
        return redirect()->back();
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = About::findorfail($id);
        $data->delete();
        return redirect()->route($this->route.'index')->with('status','Deleted successfully');

    }
}
