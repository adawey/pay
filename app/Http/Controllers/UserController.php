<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
    }

    public function edit($id)
    {
    }

    public function delete(Request $request)
    {
    }

    public function update(Request $request)
    {
    }



    public function myPayment()
    {
        $payments = Payment::where('user_id', Auth::user()->id)->get();
        // dd($payments);
        return view('user.payment')->with(['payments' => $payments]);
    }
}
