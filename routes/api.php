<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Telegram\Bot\Laravel\Facades\Telegram;
use App\Http\Controllers\api\VdsController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\api\ValuteController;
use App\Http\Controllers\api\PaymentsController;
use App\Http\Controllers\api\DomainTypeController;
use App\Http\Controllers\api\DomainOrderController;
use App\Http\Controllers\api\admin\VdsAdminController;
use App\Http\Controllers\api\admin\UsersAdminController;
use App\Http\Controllers\api\admin\ValuteAdminController;
use App\Http\Controllers\api\admin\HostingAdminController;
use App\Http\Controllers\api\admin\PaymentAdminController;
use App\Http\Controllers\api\admin\ReselingAdminController;
use App\Http\Controllers\api\admin\PromoCodeAdminController;
use App\Http\Controllers\api\admin\DomainTypeAdminController;
use App\Http\Controllers\api\admin\ReselingServerAdminController;
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
Route::post('user/forget',[AuthController::class,'forgetPassword']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/test1', function () {
    return 'salom';
});
Route::post('register',[AuthController::class,'register']);
Route::post('login',[AuthController::class,'login']);

// valute


Route::post('valute',[ValuteController::class,'add']);
// Route::delete('results/{id}',[ValuteController::class,'delete']);
// Route::put('results/{id}',[ValuteController::class,'edit']);

// domain
Route::post('domain-type',[DomainTypeController::class,'add']);
// vds
Route::post('vds',[VdsController::class,'add']);
Route::get('user/vds',[VdsController::class,'get']);

Route::middleware(['auth:sanctum'])->group(function () {
    // payment user add
    Route::post('user/domain-order',[DomainOrderController::class,'domainorder']);
    Route::get('user/domain-order',[DomainOrderController::class,'get']);

    Route::get('valute',[ValuteController::class,'get']);
    Route::get('results/{id}',[ValuteController::class,'get']);

    // domain type

    Route::get('domain-type',[DomainTypeController::class,'get']);
    Route::get('domain-type/{id}',[DomainTypeController::class,'get']);

    Route::post('user/payment',[PaymentsController::class,'payment']);
    Route::get('user/payment',[PaymentsController::class,'paymentget']);
    Route::post('lock/edit',[AuthController::class,'lock']);
    Route::post('email/reset',[AuthController::class,'sendEmail']);
    Route::get('user',[AuthController::class,'user']);
    Route::post('user/edit/',[AuthController::class,'useredit']);
    Route::post('user/password-change/',[AuthController::class,'passwordChange']);
    Route::post('logout',[AuthController::class,'logout']);
    Route::post('email',[AuthController::class,'emailAuth']);



});
    // admin login
    Route::post('admin/login',[AuthController::class,'loginAdmin']);
    // domain types .uz, .org, .com and other
    Route::post('admin/domain-type',[DomainTypeAdminController::class,'add']);
    Route::get('admin/domain-type',[DomainTypeAdminController::class,'get']);
    Route::get('admin/domain-type/{id}',[DomainTypeAdminController::class,'get']);
    Route::put('admin/domain-type/{id}',[DomainTypeAdminController::class,'edit']);
    Route::delete('admin/domain-type/{id}',[DomainTypeAdminController::class,'delete']);
    // Hosting
    Route::post('admin/hosting',[HostingAdminController::class,'add']);
    Route::get('admin/hosting',[HostingAdminController::class,'get']);
    Route::get('admin/hosting/{id}',[HostingAdminController::class,'get']);
    Route::put('admin/hosting/{id}',[HostingAdminController::class,'edit']);
    Route::delete('admin/hosting/{id}',[HostingAdminController::class,'delete']);

    // promocode
    Route::post('admin/promo-code',[PromoCodeAdminController::class,'add']);
    Route::get('admin/promo-code',[PromoCodeAdminController::class,'get']);
    Route::get('admin/promo-code/{id}',[PromoCodeAdminController::class,'get']);
    Route::put('admin/promo-code/{id}',[PromoCodeAdminController::class,'edit']);
    Route::delete('admin/promo-code/{id}',[PromoCodeAdminController::class,'delete']);
// valute
    Route::post('admin/valute',[ValuteAdminController::class,'add']);
    Route::get('admin/valute',[ValuteAdminController::class,'get']);
    Route::get('admin/valute/{id}',[ValuteAdminController::class,'get']);
    Route::put('admin/valute/{id}',[ValuteAdminController::class,'edit']);
    Route::delete('admin/valute/{id}',[ValuteAdminController::class,'delete']);
// vds
    Route::post('admin/vds',[VdsAdminController::class,'add']);
    Route::get('admin/vds',[VdsAdminController::class,'get']);
    Route::get('admin/vds/{id}',[VdsAdminController::class,'get']);
    Route::put('admin/vds/{id}',[VdsAdminController::class,'edit']);
    Route::delete('admin/vds/{id}',[VdsAdminController::class,'delete']);
// reselings
    Route::post('admin/reseling',[ReselingAdminController::class,'add']);
    Route::get('admin/reseling',[ReselingAdminController::class,'get']);
    Route::get('admin/reseling/{id}',[ReselingAdminController::class,'get']);
    Route::put('admin/reseling/{id}',[ReselingAdminController::class,'edit']);
    Route::delete('admin/reseling/{id}',[ReselingAdminController::class,'delete']);
// reselings server tariffs
    Route::post('admin/reseling-server',[ReselingServerAdminController::class,'add']);
    Route::get('admin/reseling-server',[ReselingServerAdminController::class,'get']);
    Route::get('admin/reseling-server/{id}',[ReselingServerAdminController::class,'get']);
    Route::put('admin/reseling-server/{id}',[ReselingServerAdminController::class,'edit']);
    Route::delete('admin/reseling-server/{id}',[ReselingServerAdminController::class,'delete']);
    // users
    Route::get('admin/users',[UsersAdminController::class,'get']);
    Route::get('admin/user/{id}',[UsersAdminController::class,'get']);
    // user payments
    Route::get('admin/payments',[PaymentAdminController::class,'get']);
    Route::get('admin/payments/{id}',[PaymentAdminController::class,'get']);
    Route::delete('admin/payments/{id}',[PaymentAdminController::class,'delete']);


    Route::get('/bot/getupdates', function(Request $request) {
        $updates = Telegram::getUpdates();
        $updates1 = Telegram::getBots();
        // Telegram::getUpdates();
        // $reply_markup = Telegram::forceReply();
        Telegram::sendMessage([
            'chat_id' => '1082454723',
            'text' => $request->input('text'),
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
