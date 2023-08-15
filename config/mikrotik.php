<?php
return [
    "fcm_key" => env('FCM_KEY', "AIzaSyDKV6LBoajV3fSUeIe8J1xvS6Hc4LbVoX4"),
    "fcm_server_key" => env('FCM_SERVER_KEY', "AAAAiGH35Sc:APA91bFJ3_C9BF6HBY8nuJnZtAQFqkZg5chrSVTVxIIt0IcJUPqzxAgqBU_y5p-QoF9hrmWmeCpNEx5boAM7Oon8xzYQus88bRYTJVlQf2MCLQDzaICXYB30fkA4P-k02GmJoRfQddDu"),
    "fcm_url" => env('FCM_URL', "https://fcm.googleapis.com/fcm/send"),
    "fb_domain" => env('FB_DOMAIN', "mikrotik-98046.firebaseapp.com"),
    "fb_database" => env('FB_DATABASE', "https://mikrotik-98046-default-rtdb.asia-southeast1.firebasedatabase.app/"),
    "fb_api" => env('FB_API', "bb6duQ2qXHwjYzp1Umm9Fs8WzLcegwUXUMXGFN6a"),
    "fb_projectID" => env('FB_PROJECTID', "mikrotik-98046"),
    "fb_bucket" => env('FB_BUCKET', "mikrotik-98046.appspot.com"),
    "fb_sender" => env('FB_SENDER', "585759188263"),
    "fb_appid" => env('FB_APPID', "1:585759188263:web:4c5c465a40bd85b0c8f502"),
    "fb_measure" => env('FB_MEASURE', "G-9KB6DRCFF5"),

    //mikrotik
    "mikrotik_ip" =>  env('MIKROTIK_IP', "192.168.88.1"),
    "mikrotik_port" => (int)env("MIKROTIK_PORT", 8728),
    "mikrotik_user" => env("MIKROTIK_USER", "admin"),
    "mikrotik_pass" => env("MIKROTIK_PASS", "masuk123@321"),
    "mikrotik_default_interface" => env("MIKROTIK_INTERFACE", "INTERNET"),

];
