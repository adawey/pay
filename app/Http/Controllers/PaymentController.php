<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\VerifyPay;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Notification;
use App\Notifications\SendPushNotification;

class PaymentController extends Controller
{

    public function AddBalancePage()
    {
        return view('user.addbalance');
    }
    public function verifyPay(Request $request)
    {

        $request->validate([
            'amount' => 'required',
            'credit_card_number' => 'required',
            'expiration_date' => 'required',
            'cvv' => 'required',
        ]);
        // حجزت صف فاضي فالدتا بيز 
        $code = rand(1000, 999999);
        $newPay = new Payment();
        $newPay->user_id = Auth::user()->id;
        $newPay->amount = $request->amount;
        $newPay->status = "pending";
        $newPay->type = "addBalane";
        $newPay->destination = "addBalane";
        $newPay->code = $code;
        $newPay->last_four_digits =  substr($request->credit_card_number, -4);
        $newPay->save();
        Mail::to(Auth::user()->email)->send(new VerifyPay(Auth::user()->name,  $newPay->code, $newPay->amount));

        return view('user.verifyPay')->with(['newPay' => $newPay]);
    }
    public function confirmBalance(Request $request)
    {
        $payment =  Payment::where('id', $request->id)->where('user_id', Auth::user()->id)->first();
        if ($payment->code !== $request->code) {
            return "wrong code";
            return redirect()->back()->with(['error' => 'code not match']);
        }
        $UserBalance = Auth::user()->balance;
        $newUserBalance = $UserBalance + $payment->amount;
        $updateBalance =  User::where('id', Auth::user()->id)->update(['balance' => $newUserBalance]);
        if ($updateBalance) {
            $payment->code = null;
            $payment->status = "approved";
            $payment->save();
            // Notification::send(null, new SendPushNotification("ffdf", "df", Auth::user()->fcm_token));
            return redirect()->route('home');
        } else {
            return "wrong";
            return redirect()->back()->with(['error' => 'some thing wrong']);
        }
    }

    public function sendMonyPage()
    {
        return view('user.send');
    }
    public function sendMonyCode(Request $request)
    {
        // $request->validate([
        //     'amount' => 'required',
        //     'credit_card_number' => 'required',
        //     'expiration_date' => 'required',
        //     'cvv' => 'required',
        // ]);
        $received = User::where('number', $request->phone_number)->first();
        if (!$received) {
            return redirect()->back()->with(['error' => 'user not found']);
        }
        // destination
        $code = rand(1000, 999999);
        if ($request->type == 1) {
            $destination = "frindly";
        } else {
            $destination = "salle";
        }
        $newPay = new Payment();
        $newPay->user_id = Auth::user()->id;
        $newPay->amount = $request->amount;
        $newPay->status = "pending";
        $newPay->type = "sender";
        $newPay->destination = $destination;
        $newPay->code = $code;
        $newPay->number =   $request->phone_number;
        $newPay->save();
        Mail::to(Auth::user()->email)->send(new VerifyPay(Auth::user()->name,  $newPay->code, $newPay->amount));

        return view('user.verifySend')->with(['newPay' => $newPay]);
    }
    public function sendMonyConfirm(Request $request)
    {
        $payment =  Payment::where('id', $request->id)->where('user_id', Auth::user()->id)->first();
        if ($payment->code !== $request->code) {
            return "wrong code";
            return redirect()->back()->with(['error' => 'code not match']);
        }
        $UserBalance = Auth::user()->balance;
        $received = User::where('number', $payment->number)->first();
        $newUserBalance = $UserBalance - $payment->amount;
        $receivedBalance = $received->balance + $payment->amount;
        $updateBalance =  User::where('id', Auth::user()->id)->update(['balance' => $newUserBalance]);
        if ($updateBalance) {
            $payment->code = null;
            if ($payment->destination == "frindly") {
                User::where('number', $payment->number)->update(['balance' => $receivedBalance]);
                $payment->status = "approved";
                $this->Receive_money($payment->amount,  $received->id);
            }
            $payment->save();
            return redirect()->route('home');
        } else {
            return "wrong";
            return redirect()->back()->with(['error' => 'some thing wrong']);
        }
    }
    public function Receive_money($amount, $user_id,)
    {
        $newPay = new Payment();
        $newPay->user_id = $user_id;
        $newPay->amount = $amount;
        $newPay->status = "approved";
        $newPay->type = "received";
        $newPay->destination = "received";
        $newPay->save();
        return $newPay;
    }

    public function changeStatus(Request $request)
    {
        $payment =  Payment::where('id', $request->id)->where('user_id', Auth::user()->id)->first();
    }
}
