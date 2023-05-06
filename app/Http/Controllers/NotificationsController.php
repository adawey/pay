<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationsController extends Controller
{

    public function sendNotification(Request $request)
    {
        $firebaseToken = "fhXIfN5sjJ6dflCpBKCQqV:APA91bHU67k8U4lLsbBU97WPF5M1HPOQM3wXSSB_yKR_z-UestCJCGesgYU27evEqoUVdEJ0MXLMwGH9-ga8nYG_EpD2jPJHTmDKjFNdjjn8tSpIqQffk1LUJit9woM-cSs04eL18Z8-";
        $SERVER_API_KEY = 'AIzaSyDu0iBYmw-lKaMCqHqx6nI6z6uv9KTWVMc';

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

        return true;
    }
}
