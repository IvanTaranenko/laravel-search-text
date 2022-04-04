<?php

namespace App\Http\Controllers;

use AmrShawky\LaravelCurrency\Facade\Currency;
use Illuminate\Http\Request;


class CurrencyController extends Controller
{
    protected function index()
    {
        return view('index', [
            'codes' => Currency::rates()->latest()->get()
        ]);
    }

    protected function convert(Request $request)
    {

        $request->validate([
            'amount' => 'numeric|min:0',
            'from' => 'required',
            'to' => 'required'
        ]);
        $converted = Currency::convert()
            ->from($request->from)
            ->to($request->to)
            ->amount($request->amount)
            ->round(2)   //to decimals
            ->get();

        return back()->with([
            'conversion' => $request->amount . ' ' . $request->from . ' is equal to ' . $converted . ' ' . $request->to,
            'amount'=>$request->amount,
            'from'=>$request->from,
            'to'=>$request->toe,

        ]);

    }
}
