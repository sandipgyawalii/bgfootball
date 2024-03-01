<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Gallerycategory;
use Illuminate\Http\Request;

class GallerycategoryController extends Controller
{
    protected $panel = 'admin.components.gallerycategory.';
    protected $route = 'gallerycategory.';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Gallerycategory::all();
        return view($this->panel.'.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view($this->panel.'.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['name'=>'required',]);
        $category = new Gallerycategory();
        $category->name = $request->name;
        $category->save();
        return redirect()->route($this->route.'index')->with('status','Created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Gallerycategory $gallerycategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallerycategory $gallerycategory)
    {
        return view($this->panel.'.edit',compact('gallerycategory'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallerycategory $gallerycategory)
    {
        $request->validate(['name'=>'required',]);
        $gallerycategory->name = $request->name;
        $gallerycategory->save();
        return redirect()->route($this->route.'index')->with('status','Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallerycategory $gallerycategory)
    {
    $gallerycategory->delete();
    return redirect()->route($this->route.'index')->with('status','Deleted successfully');

    }
}
