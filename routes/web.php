<?php

use App\Mail\sendEmail;
use App\Mail\MyTestEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\SendEmailController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/',[AuthController::class,'sendEmail']);
// Route::get('/ss', function () {
//     return  view('welcome');
// });
// Route::get('/', function () {
//     $to_name = "RECEIVER_NAME";
//     $to_email = "tomail@gmail.com";
//     $data = array("name"=>"Cloudways (sender_name)", "body" => "A test mail");
//     Mail::send([], $data, function($message) use ($to_name, $to_email) {
//     $message->to($to_email, $to_name)
//     ->subject("laravelda emailga habar jo'natish");
//     $message->from("preealweb@gmail.com","Test Mail");
//     });
//     return 'salom';
// });
