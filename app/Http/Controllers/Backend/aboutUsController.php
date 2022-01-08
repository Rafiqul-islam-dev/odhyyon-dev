<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\About;

class aboutUsController extends Controller
{
    public function index()
    {

        $about = About::all();
        return view('backend.aboutUs', compact('about'));
    }

    public function addaboutUs(Request $request)
    {
        $request->validate([
            'ourmission' => 'required',
            'ourvision' => 'required',
            'whatwedo' => 'required',
            'topimage' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'middleimage' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $about = new About();
        $about->ourmission = $request->ourmission;
        $about->ourvision = $request->ourvision;
        $about->whatwedo = $request->whatwedo;

        if ($request->file('topimage')) {
            $image = $request->file('topimage');
            $image_name = Str::random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'upload/about/';
            $image_url = $upload_path . $image_full_name;
            $image->move($upload_path, $image_full_name);
            $about['topimage'] = $image_url;
        }
        if ($request->file('middleimage')) {
            $image = $request->file('middleimage');
            $image_name = Str::random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'upload/about/';
            $image_url = $upload_path . $image_full_name;
            $image->move($upload_path, $image_full_name);
            $about['middleimage'] = $image_url;
        }

        $about->save();
        return redirect('aboutUs')->with(['message' => 'Add successfully']);
    }

    public function editClients($id)
    {
        $clients = About::find($id);
        return view('backend.editClients', compact('clients'));
    }

    public function updateClients(Request $request, $id)
    {
        $clients = About::find($id);
        $clients->title = $request->title;
        $clients->description = $request->description;
        $clients->is_caseStudy = $request->is_caseStudy;
        $clients->priceType = $request->priceType;

        if ($request->file('image')) {
            $image = $request->file('image');
            $image_name = Str::random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'upload/clients/';
            $image_url = $upload_path . $image_full_name;
            $image->move($upload_path, $image_full_name);
            $clients['image'] = $image_url;
        }

        $clients->save();
        return redirect('clients')->with(['message' => 'Update successfully']);
    }



    public function delet($id)
    {

        $delete = DB::table('clients')
            ->where('id', $id)
            ->first();
        $photo = $delete->image;
        unlink($photo);
        $dltuser = DB::table('clients')
            ->where('id', $id)
            ->delete();

        if ($dltuser) {
            $notification = array(
                'messege' => 'Successfully Deleted ',
                'alert-type' => 'success'
            );
            return Redirect()->route('clients')->with($notification);
        } else {
            $notification = array(
                'messege' => 'error ',
                'alert-type' => 'success'
            );
            return Redirect()->back()->with($notification);
        }
    }
}
