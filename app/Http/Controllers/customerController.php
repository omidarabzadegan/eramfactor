<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class customerController extends Controller
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
    
    function all() {
        $customers = Customer::all();
        return view('admin.customers.all',compact('customers'));
    }

    function store(Request $request) {
            
            Customer::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'user_id' => Auth::id()
        ]);

        return back();
    }

    function destroy($id) {
        $customerDelete = Customer::destroy($id);
        if (!$customerDelete) {
            return back()->with('success' , 'حذف با موفقیت انجام شد');
        }else{
            return back()->with('failed' , 'حذف با خطا مواجه شد');
        }

    }
}
