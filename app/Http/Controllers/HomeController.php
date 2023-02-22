<?php

namespace App\Http\Controllers;

use App\Models\Factor;
use App\Models\Law;
use App\Models\Customer;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $lastActivity = jdate(Auth::user()->last_activity)->format('Y/m/d ساعت H:i:s') ;
        $factor = Factor::where('user_id' , Auth::id())->count();
        $law = Law::all()->count();
        $customer = Customer::where('user_id' , Auth::id())->count();
        return view('admin.index', compact('factor', 'law' , 'lastActivity','customer'));
    }
}
