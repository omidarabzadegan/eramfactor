<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Device;
use App\Models\Factor;
use App\Models\Law;
use App\Models\Status_of_factor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Morilog\Jalali\CalendarUtils;
use Morilog\Jalali\Jalalian;

class factorsController extends Controller
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


    function create()
    {
        return view('admin.factors.addfactors');
    }

    function store(Request $request)
    {
        $validatedData = $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
        ]);
        $tracking_code = mt_rand(1000000000, 9999999999); 
        $customerStore = Customer::create([
            'name' => $validatedData['name'],
            'phone' => $validatedData['phone'],
            'user_id' => Auth::id()
        ]);
        $name = $validatedData['name'];
        $phone = $validatedData['phone'];

        $storeFactor = Factor::create([
            'imei' => $request->imei,
            'description' => $request->description,
            'tracking_code' => $tracking_code,
            'user_id' => Auth::id(),
            'customer_id' => $customerStore->id
        ]);
        
        
        $factorafter = Factor::Where("tracking_code", "$tracking_code")->first();

        Status_of_factor::create([
            'factor_id' => $factorafter->id,
        ]);


        Device::create([
            'password' => $request->password,
            'faceandtouch' => $request->faceandtouch,
            'wirless' => $request->wirless,
            'bluetooth' => $request->bluetooth,
            'vocerecord' => $request->voicerecord,
            'camerafront' => $request->camerafront,
            'rearcamera' => $request->rearcamera,
            'microphones' => $request->microphone,
            'speacker' => $request->speacker,
            'earspicker' => $request->earspeacker,
            'proximitysensor' => $request->proximitysensor,
            'alssensor' => $request->alssensor,
            'touch' => $request->touch,
            'lcd' => $request->lcd,
            'keys' => $request->keys,
            'vibrator' => $request->vibrator,
            'charging' => $request->charging,
            'callfunction' => $request->callfunction,
            'onoff' => $request->onoff,
            'factor_id' => $factorafter->id,
        ]);

        if ($storeFactor) {
            
            return back()->with('success', 'فاکتور جدید ثبت شد');
        } else {
            return back()->with('feiled', 'ثبت با خطا مواجه شد با برنامه نویس تماس بگیرید');
        }
    }

    function all()
    {
        
        $userId = Auth::id();
        $factors = Factor::Where('user_id', $userId)->get();
        
        return view('admin.factors.all', compact('factors'));
    }

    function showFactor($factor_id)
    {
        $factor = Factor::findorfail($factor_id);
        $law = Law::first();
        return view('admin.factors.showfactor', compact('factor', 'law'));
    }

    function destroy($factor_id)
    {
        $factor = Factor::destroy($factor_id);

        if (!$factor) {
            return back()->with('success', 'فاکتور با موفقیط حذف شد');
        } else {
            return back()->with('failed', 'حذف فاکتور با خطا مواجه شد');
        }
    }

    function updateStatus(Request $request , $factorId)
    {
        $status = Status_of_factor::where('factor_id' , $factorId)->first();
        $status->update([
            'status' => $request->status
        ]);

        return back();
    }



}
