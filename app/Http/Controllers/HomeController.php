<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Input;

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
        $user = Auth::user();
        if($user->subscribed('venditor')) {
            return view('home');
        }
        else {
            return view('subscribe');
        }

    }

    public function subscribe() {
        return view('subscribe');
    }

    public function createSubscription() {
        $user = Auth::user();

        $cardToken = Input::get('stripeToken');

        $user->newSubscription('venditor', 'venditor')
            ->create($cardToken, ['email' => $user->email]);

        return view('home');
    }
}
