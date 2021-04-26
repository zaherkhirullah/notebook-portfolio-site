<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     * @return Response
     */

    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('home.about');
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function works()
    {
        return view('home.works');
    }

    public function gallery()
    {
        return view('home.gallery');
    }

    public function education()
    {
        return view('home.education');
    }

    public function projects()
    {
        return view('home.projects');
    }

    public function languages()
    {
        return view('home.languages');
    }

}
