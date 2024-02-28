<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::all();
        return view('admin.components.profile.index',compact('profile'));
    }

    public function edit()
    {
        $profile = Profile::first();
        return view('admin.components.profile.edit',compact('profile'));
    }

    public function update(Request $request,$id)
    {
        $data = Profile::findorfail($id);
        $data->company_name = $request->name;
        $data->company_address = $request->address;
        $data->company_description = $request->description;
        $data->company_title = $request->title;
        $data->phone_number = $request->phone_number;
        $data->email_address = $request->email_address;
        $data->map = $request->map;
        $data->fb = $request->fb;
        $data->insta = $request->insta;
        $data->twitter = $request->twitter;

        if(request()->logo){
            $destination = $data->logo;
            if(File::exists($destination))
            {
                File::delete($destination);
            }

            $filename = time().'_'.rand(0000,9999).'.'.$request->logo->getClientOriginalExtension();
            $data->logo = 'assets/uploads/companyprofile/'.$filename;
            $request->logo->move('assets/uploads/companyprofile',$filename);
        }

        if(request()->about_image){
    
                $destination_about = $data->about_image;
                if(File::exists($destination_about))
                {
                    File::delete($destination_about);
                }
    
                $filename_about = time().'_'.rand(0000,9999).'.'.$request->about_image->getClientOriginalExtension();
                $data->about_image = 'assets/uploads/companyprofile/'.$filename_about;
                $request->about_image->move('assets/uploads/companyprofile',$filename_about);
        }

        $data->save();


        return redirect()->route('profile_index')->with('status','Created Successfully');
        
    }
}
