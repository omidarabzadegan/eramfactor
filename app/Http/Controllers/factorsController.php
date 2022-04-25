<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\Factor;
use App\Models\Law;
use Illuminate\Http\Request;

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
            'imei' => 'required|unique:factors,imei'
        ]);

        $storeFactor = Factor::create([
            'name' => $validatedData['name'],
            'phone' => $validatedData['phone'],
            'imei' => $validatedData['imei'],
        ]);
        $imei = $validatedData['imei'];
        $factorafter = Factor::Where("imei" , "$imei")->first();
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

        if($storeFactor)
        {
            return back()->with('success' , 'فاکتور جدید ثبت شد');
        }else{
            return back()->with('feiled' , 'ثبت با خطا مواجه شد با برنامه نویس تماس بگیرید');
        }
    }

    function all(Request $request)
    {
        // $factor = null;
        // if ($request->has('table_search')) {
        //     $factor = Factor::query()
        //     ->where('name', 'LIKE', "%{$request['table_search']}%") 
        //     ->orWhere('imei', 'LIKE', "%{$request['table_search']}%") 
        //     ->get();
        // }else{
        //     dd('oh oh');
        // }

        $factors = Factor::paginate(10);
        return view('admin.factors.all' , compact('factors'));
    }

    function showFactor($factor_id)
    {
        $factor = Factor::findorfail($factor_id);
        $law = Law::first();
        return view('admin.factors.showfactor'  , compact('factor' , 'law'));
    }

    function destroy($factor_id)
    {
        $factor = Factor::destroy($factor_id);
        
        if (!$factor) {
            return back()->with('success', 'فاکتور با موفقیط حذف شد');
        }else
        {
            return back()->with('failed' , 'حذف فاکتور با خطا مواجه شد');
        }
        
    }
}