<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Telegram\Bot\Laravel\Facades\Telegram;
// use Telegram\Bot\Api;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/bot/test', function() {
    // $response = Telegram::getMe();
    // $botId = $response->getId();
    // $firstName = $response->getFirstName();
    // $username = $response->getUsername();
    // Telegram::addCommands([
    //     Telegram\Bot\Commands\HelpCommand::class,
    //     Vendor\Project\TestCommand::class,
    //     Vendor\Project\StartCommand::class,
    //  ]);
    $reply_markup = Telegram::replyKeyboardHide();

$response = Telegram::sendMessage([
    'chat_id' => '1082454723',
    'text' => 'Hello World',
    'reply_markup' => $reply_markup
]);
    return $response;
});
Route::post('/<5700223914:AAE9TvqAgjPOhFgZNF2YV_-BrxeJ5pvyuTY>/webhook', function () {
    $update = Telegram::commandsHandler(true);

    // Commands handler method returns an Update object.
    // So you can further process $update object
    // to however you want.

    return 'ok';
});
    Route::get('/bot/getupdates', function(Request $request) {
        $updates = Telegram::getUpdates();
        $updates1 = Telegram::getBots();
        // Telegram::getUpdates();
        // $reply_markup = Telegram::forceReply();
        Telegram::sendMessage([
            'chat_id' => '1082454723',
            'text' => $request->input('text') ?? 'test',
            'description'=>$request,
            'photo'=>'https://miro.medium.com/max/700/1*doPc1VUhSlqwzo76MOh4WA.png'
        ]);
        // $reply_markup = Telegram::replyKeyboardHide();

// $response = Telegram::forwardMessage([
//     'chat_id' => '1082454723',
//     'text' => 'Hello World',
//     'description'=>$request,
// ]);
// $response = Telegram::sendMessage([
//     'chat_id' => '1082454723',
//     'text' => 'Hello World',
//     'description'=>$request,
//     'reply_markup' => $reply_markup
// ]);
        // Telegram::setAsyncRequest(true)
        //   ->sendPhoto(['chat_id' => '1082454723', 'text' => 'Hello world!'.$request->input('text'),
        //   'description'=>$request, 'photo' => 'https://miro.medium.com/max/700/1*doPc1VUhSlqwzo76MOh4WA.png']);
        return  $request;
    });

    Route::get('/bot/sendmessage', function() {

        Telegram::sendMessage([
            'chat_id' => 'RECIPIENT_CHAT_ID',
            'text' => 'Hello world!'
        ]);
        return 'asas';
    });
    Route::post('/bot/send', function() {

        // $handle = curl_init(
        //     'https://api.telegram.org/5700223914:AAE9TvqAgjPOhFgZNF2YV_-BrxeJ5pvyuTY'
        //                 .'/post');
        //             curl_setopt($handle, CURLOPT_POST, true);
        //             curl_setopt($handle, CURLOPT_HEADER, 0);
        //             curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
        //             curl_setopt($handle, CURLOPT_POSTFIELDS, json_encode(['salom'=>'qale']));
        //             curl_setopt($handle, CURLOPT_HTTPHEADER,
        //                 array_merge( array("Content-Type: application/json")
        //                     ) );
        //             curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 5);
        //             curl_setopt($handle, CURLOPT_TIMEOUT, 60);

        //             $result = curl_exec($handle);
        //             curl_close($handle);
        //             return ( json_decode($result,1) ? json_decode($result,1) :
        //                 $result);

        // return 'asas';
        Telegram::sendMessage([
            'chat_id' => '217578183',
            'text' => 'Hello world!'
        ]);
    });

    Route::get('/', function () {
        return view('welcome');
    });

    Route::any('telegramsecret',
        [\App\Http\Controllers\TelegramBotController::class,
            'get_data_from_tg']);
