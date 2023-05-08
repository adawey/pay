<?php

namespace App\Http\Traits;

use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



trait NotificationTrait
{

    public function sendNotification($user_id, $title, $body)
    {

        $firebaseToken = User::where('id', $user_id)->whereNotNull('fcm_token')->pluck('fcm_token')->toArray();

        if (!$firebaseToken) {
            return null;
        }
        $this->saveNot($user_id, $title, $body);
        $SERVER_API_KEY = 'AAAAMP7Ar3Y:APA91bHBEY7ecTTdjvxZBNacgqy_dbLD2ftNFn9vVo4hwW-QrnCW0BuLCgKOpfEFv3z8kmWOMUBfwQFNQey0CBVlFbOkt5GzTy__4cyHJEe3wMXUS1Z7VUVs-M__eTkHzGdVOD0_vCnE';
        $data = [
            "registration_ids" => $firebaseToken,
            "notification" => [
                "title" =>  $title,
                "body" => $body
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

    public function saveNot($user_id, $title, $body)
    {
        $new = new Notification();
        $new->user_id = $user_id;
        $new->title = $title;
        $new->body = $body;
        $new->save();
        return $new;
    }
}
