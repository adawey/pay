<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Report;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::user()->type !== 3) {
            return redirect()->route('home');
        }
        return view('admin.index');
    }
    public function users()
    {
        $users = User::where('type', 1)->get();
        return view('admin.users')->with(['users' => $users]);
    }
    public function merchant(Request $request)
    {
        $users = User::where('type', 2)->get();
        return view('admin.merchant');
    }
    public function payments()
    {
        $payments = Payment::all();
        return view('admin.payments');
    }
    public function reports()
    {
        $reports = Report::all();
        return view('admin.reports');
    }
    public function deleteUser(Request $request)
    {
        $user = User::find($request->id);
    }
}
