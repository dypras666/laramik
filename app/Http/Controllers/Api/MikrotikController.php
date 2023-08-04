<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class MikrotikController extends Controller
{
    public function sendNotification(Request $request)
    {
        $firebaseToken = 'eAnd6-uekoALjJyrkSgv7F:APA91bGmydz8Y96sdtjm11S_TXWx0yMMN4ywg5OVwh3qPPry-7LcEBvCDMjYxBSck6QgYzdlDeneLRbpHQRi6RnKVoo0GgnjCxiCXJL3r_KiCbm6ebdqe3fQrPcJ7CaLA3GuWr7Uovm3';
        $SERVER_API_KEY = 'AAAAiGH35Sc:APA91bFJ3_C9BF6HBY8nuJnZtAQFqkZg5chrSVTVxIIt0IcJUPqzxAgqBU_y5p-QoF9hrmWmeCpNEx5boAM7Oon8xzYQus88bRYTJVlQf2MCLQDzaICXYB30fkA4P-k02GmJoRfQddDu';

        $data = [
            "registration_ids" => $firebaseToken,
            "notification" => [
                "title" => $request->title,
                "body" => $request->body,
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

        dd($response);
    }
}
