<?php

namespace Dirtsync\Http\Controllers;

use Illuminate\Http\Request;

use Dirtsync\Http\Requests;
use Dirtsync\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        return view('home');

    }




}
