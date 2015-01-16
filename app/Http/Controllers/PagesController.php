<?php namespace Hawksmoor\Http\Controllers;

use Hawksmoor\Http\Requests;
use Hawksmoor\Http\Controllers\Controller;

class PagesController extends Controller {

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('pages.index');
    }

    public function policies()
    {
        return view('pages.policies');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function vision()
    {
        return view('pages.vision');
    }

    public function news()
    {
        return view('pages.news');
    }

}
