<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Gallerycategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    protected $panel = 'admin.components.gallery.';
    protected $route = 'gallery.';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallery = Gallery::all();
        return view($this->panel.'.index',compact('gallery'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category =  Gallerycategory::all();
        return view($this->panel.'.create',compact('category'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'category_id' => 'required',
            'title' => 'required',
        ]);
        $data = new Gallery();
        if(request()->image){
            $filename = rand(0000,9999).'_'.time().'.'.$request->image->getClientOriginalExtension();
            $data->url = 'assets/uploads/gallery/'.$filename;
            $request->image->move('assets/uploads/gallery',$filename);
        }else{
            $data->url = 'file';
        }
        $data->title = $request->title;
        $data->gallerycategories_id = $request->category_id;
        $data->save();

    return redirect()->route($this->route.'index')->with('status','Created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        $category =  Gallerycategory::where('id',$gallery->gallerycategories_id)->get();
        return view($this->panel.'.edit',compact('category','gallery'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'category_id' => 'required',
            'title' => 'required',
        ]);
        if(request()->image){
            $destination = $gallery->url;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $filename = rand(0000,9999).'_'.time().'.'.$request->image->getClientOriginalExtension();
            $gallery->url = 'assets/uploads/gallery/'.$filename;
            $request->image->move('assets/uploads/gallery',$filename);
        }
        $gallery->title = $request->title;
        $gallery->gallerycategories_id = $request->category_id;
        $gallery->save();

    return redirect()->route($this->route.'index')->with('status','Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        $destination = $gallery->url;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $gallery->delete();

    return redirect()->route($this->route.'index')->with('status','Deleted successfully');
    }
}
