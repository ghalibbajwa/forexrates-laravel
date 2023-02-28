<?php

return [
    'driver' => env('FCM_PROTOCOL', 'http'),
    'log_enabled' => false,

    'http' => [
        'server_key' => env('FCM_SERVER_KEY','AAAADYMCGBk:APA91bGh6EnFQR8XjPlEK8JoU-DA-HcYqYyHEF_x_XtW7hnKy21hyJLznUSxxDync4gehMJ66CE2HRUqEaSQFFAhq1d9jCtInboAfQQQUv06i6rYetEK747uwylvS7yGVvLpyXBTxEvh'),
        'sender_id' => env('FCM_SENDER_ID', '58032527385'),
        'server_send_url' => 'https://fcm.googleapis.com/fcm/send',
        'server_group_url' => 'https://android.googleapis.com/gcm/notification',
        'timeout' => 30.0, // in second
    ],
];
