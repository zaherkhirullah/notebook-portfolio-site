<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * @return Application|Factory|View
     */
    public function about()
    {
        return view('home.about');
    }

    /**
     * @return Application|Factory|View
     */
    public function contact()
    {
        return view('home.contact');
    }

    /**
     * @return Application|Factory|View
     */
    public function works()
    {
        return view('home.works');
    }

    /**
     * @return Application|Factory|View
     */
    public function gallery()
    {
        return view('home.gallery');
    }

    /**
     * @return Application|Factory|View
     */
    public function education()
    {
        return view('home.education');
    }

    /**
     * @return Application|Factory|View
     */
    public function projects()
    {
        return view('home.projects');
    }

    /**
     * @return Application|Factory|View
     */
    public function languages()
    {
        return view('home.languages');
    }

}
