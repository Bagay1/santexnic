<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use function MongoDB\BSON\toJSON;

class TelegramController extends Controller
{
    public function postMessage(Request $request)
    {
        $telegram_url = 'https://api.telegram.org/bot1922914333:AAGp_UFm8Bgtn9zBkJk6HXupm5C6JTHC878/sendMessage';
        $chat_id = '-614205009';
        $data = "======Новая заявка===== \n ";
        $data .= $request->name ." \n";
        $data .= $request->tel ." \n";
        $data .= $request->comments ." \n";
        $data .= "==================== \n";

        Http::post($telegram_url, [
            'chat_id' => $chat_id,
            'text' => $data

        ]);

        return json_encode('Ваша заявка отправлена');

    }
}
