<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsEvent;
use App\Models\Clients;

class FontendController extends Controller
{
    public function productFeatures()
    {
        return view('fontend.productFeatures');
    }

    public function pricing()
    {
        return view('fontend.priching');
    }

    public function clients()
    {
        $clients = Clients::orderBy('id', 'DESC')->get();
        return view('fontend.clients', compact('clients'));
    }

    public function newsEvents()
    {
        $news = NewsEvent::orderBy('id', 'DESC')->get();
        return view('fontend.newsEvent', compact('news'));
    }

    public function aboutus()
    {
        return view('fontend.aboutUs');
    }

    public function contactUs()
    {
        return view('fontend.contactUs');
    }

    public function moreDetailsClients(Request $request, $id)
    {
        $clients = Clients::find($id);
        return view('fontend.clientsDetails', compact('clients'));
    }
}
