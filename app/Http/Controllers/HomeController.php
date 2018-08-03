<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Http\Resources\UserCollection;
use App\Http\Resources\User as UserResource;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // date th
        // $dt = Carbon::now('Asia/Bangkok');
        // return view('home');

        // return new UserCollection(User::all());
        return new UserResource(User::find(1));
    }
}
