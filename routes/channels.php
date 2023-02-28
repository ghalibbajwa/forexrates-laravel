<?php

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('announcelott', function ($data) {
    return $data;
});
Broadcast::channel('chatevent', function ($data) {
    return $data;
});
Broadcast::channel('winner{id}', function ($data, $id) {
    return $data->user->id == (int) $id;
});
Broadcast::channel('trivia', function ($data) {
    return $data;
});
