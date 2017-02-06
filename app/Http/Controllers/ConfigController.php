<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Config;
use App\Currency;
use Session;

class ConfigController extends Controller
{

    public function updateConfig(Request $request)
    {
        $currency = $request->input('currency_id');
        $user = $request->input('user_id');

        $config = Config::updateOrCreate(
            ['user_id' => $user],
            ['currency_id' => $currency]
        );

        Session::flash('success', 'Configurations updated successfully.');

        return redirect()->route('bot-config',[]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currencies = Currency::all();
        return view('config.index')->withCurrencies($currencies);
    }

}
