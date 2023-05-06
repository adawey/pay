<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportsController extends Controller
{

    public function reportPage()
    {
        return view('reports.reportform');
    }
    public function storeReport(Request $request)
    {

        $NewReport = new Report();
        $NewReport->user_id = Auth::user()->id;
        $NewReport->title = $request->title;
        $NewReport->body = $request->body;
        $NewReport->status = $request->status;
        $NewReport->save();
        return redirect()->route('home')->with(['success' => 'thank you']);
    }
    public function adminPage()
    {
    }
    public function OneReport($id)
    {
    }
}
