<?php

namespace App\Http\Controllers;

use App\Models\Law;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class lawsController extends Controller
{
    function create()
    {
        $law = Law::first();
        return view('admin.laws.create' , compact('law'));
    }

    function store(Request $request)
    {
        $validatedData = $this->validate($request, [
            'description' => 'required|min:20',
        ]);
        $beforeLaw = Law::first();
        if (!isset($beforeLaw)) {
            $law = Law::create([
                'description' => $validatedData['description'],
                'user_id' => Auth::id()
            ]);
            
            if ($law) {
                return back()->with('success' , 'قانون با موفقیت به فاکتور های جدیداضافه میشود');
            }else{
                return back()->with('failed' , 'ثبت با خطا مواجه شد');
            }
        }else
        {
            dd('ss');
            return back()->with('failed' , 'شما مجاز نیستید');

        }
        
    }

    function destroy()
    {
        Law::truncate();
        return back();
    }
}
