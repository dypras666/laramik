<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\User;

class MikrotikController extends BaseController
{
    public function sendpush(Request $request): JsonResponse
    {
        $firebaseToken = 'enErJ8UYoQhu5Lije03BP1:APA91bHLb0e-qHONQqVN34wBJ-_D4t8dJJyOQ_c2ayyA8jvZf8NSR1sZwSTefawg4aEf8sUWyw0bhgMkpotkD8YAXpppJfk3Rtnb9XqwJvExZM8bCURb0cvPYM2aT5hTeNjLPB7v2MPe';
        $SERVER_API_KEY = 'AAAAiGH35Sc:APA91bFJ3_C9BF6HBY8nuJnZtAQFqkZg5chrSVTVxIIt0IcJUPqzxAgqBU_y5p-QoF9hrmWmeCpNEx5boAM7Oon8xzYQus88bRYTJVlQf2MCLQDzaICXYB30fkA4P-k02GmJoRfQddDu';

        $data = [
            "registration_ids" => [$firebaseToken],
            "notification" => [
                "title" => $request->title,
                "body" => $request->text,
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
        return response()->json($request);
    }
}
