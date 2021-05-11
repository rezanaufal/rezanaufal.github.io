<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;

class LandingController extends Controller
{
  
    public function landingpage() 
    {
        $data['portofolio'] = Portofolio::all();                  
        return view('porto', $data);
    }

    public function detail($id)
    {
        $data['portofolio'] = Portofolio::findOrFail($id);
        return view('detail', $data);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
