<?php

namespace App\Http\Controllers;

use App\Rules\Unsigned;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserBalanceController extends Controller
{
    public function getBalance() {
        return json_encode(['balance' => Auth::user()->balance]);
    }

    public function setBalance(Request $request) {
        Auth::user()->update( $request->validate([
            'balance' => ['integer', new Unsigned]
        ]));
    }
}
