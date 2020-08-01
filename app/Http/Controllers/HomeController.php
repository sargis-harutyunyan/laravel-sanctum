<?php

namespace App\Http\Controllers;

use App\Accounts;
use App\ApiKeys;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $accounts = Auth::user()->accounts;

        return view('home', compact('accounts'));
    }


    public function createNewToken(Request $request)
    {
        $id = $request->get('account');
        $token = Accounts::find($id)->createToken('token-name')->plainTextToken;

        return view('token-test', compact('token'));
    }


    public function installOldToken(Request $request)
    {
        $id = $request->get('account');
        $oldToken = $request->get('old_token');
        $oldApiKey = ApiKeys::where('account_id', $id)->where('key', $oldToken)->first();

        if (!$oldApiKey) {
            return response()->json("Invalid Key");
        }

        $token = Accounts::find($id)->installOldToken($oldToken,'token-name')->plainTextToken;

        return view('token-test', compact('token'));
    }
}
