<?php

namespace App\Http\Controllers;

use App\Models\Factor;
use App\Models\Status_of_factor;
use Illuminate\Http\Request;
use Morilog\Jalali\Jalalian;

class userStatusController extends Controller
{
    function getStatus(Request $request)
    {
        $factor = Factor::all()->where('tracking_code', $request->tracking_code )->first();
        if (!isset($factor)) {
            return back();
        }
        $status = Status_of_factor::all()->where('factor_id', $factor->id)->first();
        if (!isset($status)) {
            return back();
        }
        $created_at = Jalalian::forge($factor->created_at)->format('Y/m/d');
        $created_at_time = Jalalian::forge($factor->created_at)->format('H:i');
        if ($status->status) {
            if ($status->status == 'delivered') {
                $statusCondition = 'تحویل داده شده';
            } 
            if ($status->status == 'under_repaired') {
                $statusCondition = 'در حال تعمیر';
            }
            if ($status->status == 'repaired') {
                $statusCondition = 'تعمیر شده';
            } 
            if ($status->status == 'entrance') {
                $statusCondition = 'ورودی';
            } 
            
        }
        $results = [
            'factorData' => [
                'name' => $factor->name,
                'tracking_code' => $factor->tracking_code,
                'id' => $factor->id,
                'created_at' => $created_at,
                'created_at_time' => $created_at_time,
            ],
            'statusData' => [
                'status' => $statusCondition,
            ]
        ];
        if (!$results) {
            return back();
        } else {
            return view('frontend.show-tracking', compact('results'));
        }
    }
}
