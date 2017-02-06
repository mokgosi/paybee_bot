<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;
use Illuminate\Support\Facades\Auth;
use App\Currency;

class TelegramController extends Controller
{

    public function getSendMessage() 
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        $currencies = Currency::all();
        return view('telegram.message')->withCurrencies($currencies);
    }

    public function postSendMessage(Request $request)
    {
        $rules = [
            'message' => 'required'
        ];

        $this->validate($request, [
            'message' => 'required|max:255'
        ]);

        $update = Telegram::commandsHandler();
        dd($update);

        return redirect()->back()
            ->with('status', 'success')
            ->with('message', 'Message sent');
    }

    public function getUpdates()
    {
        $updates = Telegram::getUpdates();
        dd($updates);
    }

    public function getMe()
    {
        $response = Telegram::getMe();
        $botId = $response->getId();
        $firstName = $response->getFirstName();
        $username = $response->getUsername();
    }

}
