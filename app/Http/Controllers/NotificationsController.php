<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationsController extends Controller
{

    public function sendNotification(Request $request)
    {

        $firebaseToken = User::where('id', Auth::user()->id)->whereNotNull('fcm_token')->pluck('fcm_token')->toArray();

        if (!$firebaseToken) {
            return null;
        }

        // $firebaseToken = "fhXIfN5sjJ6dflCpBKCQqV:APA91bHU67k8U4lLsbBU97WPF5M1HPOQM3wXSSB_yKR_z-UestCJCGesgYU27evEqoUVdEJ0MXLMwGH9-ga8nYG_EpD2jPJHTmDKjFNdjjn8tSpIqQffk1LUJit9woM-cSs04eL18Z8-";
        $SERVER_API_KEY = 'AAAAMP7Ar3Y:APA91bHBEY7ecTTdjvxZBNacgqy_dbLD2ftNFn9vVo4hwW-QrnCW0BuLCgKOpfEFv3z8kmWOMUBfwQFNQey0CBVlFbOkt5GzTy__4cyHJEe3wMXUS1Z7VUVs-M__eTkHzGdVOD0_vCnE';

        // $newNotify = new Notification();
        // $newNotify->message = $request->message;

        // $newNotify->save();


        $data = [
            "registration_ids" => $firebaseToken,
            "notification" => [
                "title" => "يسيس",
                "body" => "سيسيسشي"
            ]
        ];
        $dataString = json_encode($data);

        $headers = [
            'Authorization: key=' . $SERVER_API_KEY,
            'Content-Type: application/json',
        ];

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);

        $response = curl_exec($ch);

        return $response;
    }

    public function index()
    {
        $Notifications = Notification::where('user_id', Auth::user()->id)->get();

        return view('user.notification')->with(['Notifications' => $Notifications]);
    }
}
