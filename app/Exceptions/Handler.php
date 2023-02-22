<?php

namespace App\Exceptions;

use Throwable;
use App\Helpers\Telegram;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */


    // public function report(Throwable $e)
    // {
    //     $mes = $e->getMessage();
    //     $data = [
    //         'description'=>$e->description(),
    //         'file'=>$e->getFile(),
    //         'line'=>$e->getLine()
    //     ];
    //     $telegram = new Telegram();
    //     \Illuminate\Support\Facades\Http::post('https://api.telegram.org/bot5700223914:AAE9TvqAgjPOhFgZNF2YV_-BrxeJ5pvyuTY/sendMessage',[
    //         'chat_id' => 1082454723,
    //             'text' =>  $mes,
    //             'parse_mode'=>(string)view('report',$data)
    //     ]);
    // }
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
}
