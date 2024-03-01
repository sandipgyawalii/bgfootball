<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PartnerController extends Controller
{
    protected $panel = 'admin.components.partner.';
    protected $route = 'partner.';

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partners = Partner::all();
        return view($this->panel . 'index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view($this->panel . 'create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'position' => 'required',
            'fb' => 'required',
            'insta' => 'required',
            'twitter' => 'required',
        ]);

        if(request()->image){
            $filename = rand(0000,9999).'_'.time().'.'.$request->image->getClientOriginalExtension();
            $data['url'] = 'assets/uploads/partner/'.$filename;
            $request->image->move('assets/uploads/partner',$filename);
        }else{
            $data['url'] = 'file';
        }

        Partner::create($data);
        return redirect()->route($this->route.'index')->with('status','Created  successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Partner $partner)
    {
        return view($this->panel.'edit',compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Partner $partner)
    {
        $data = $request->validate([
            'name' => 'required',
            'position' => 'required',
            'fb' => 'required',
            'insta' => 'required',
            'twitter' => 'required',
        ]);
        $partner->name = $request->name;
        $partner->position = $request->position;
        $partner->fb = $request->fb;
        $partner->insta = $request->insta;
        $partner->twitter = $request->twitter;
        if(request()->image){
            $destination = $partner->url;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $filename = rand(0000,9999).'_'.time().'.'.$request->image->getClientOriginalExtension();
            $partner->url = 'assets/uploads/partner/'.$filename;
            $request->image->move('assets/uploads/partner',$filename);
        }
        $partner->save();
        return redirect()->route($this->route.'index')->with('status','Updated  successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partner $partner)
    {
        $destination = $partner->url;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $partner->delete();
        return redirect()->route($this->route.'index')->with('status','Deleted  successfully');

    }
}
