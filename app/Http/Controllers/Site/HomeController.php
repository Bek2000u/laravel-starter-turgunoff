<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Banner;
use App\Models\Client;
use App\Models\Experiences;
use App\Models\News;
use App\Models\Opportunities;
use App\Models\Price;
use App\Models\Project;
use App\Models\Review;
use App\Models\Team;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Telegram\Bot\Laravel\Facades\Telegram;
class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function sendToTg(Request $request)
    {
        $this->validate($request, ['phone' => 'required|min:8']);

        Telegram::sendMessage([
            'chat_id' => env('TELEGRAM_CHANNEL_ID', '-1001464962737'),
            'parse_mode' => 'HTML',
            'text' => "<b>Новая обращение!</b>\n"
                . "\n"
                . "<b>Имя клиента</b>: $request->name\n"
                . "<b>Тел номер</b>: $request->phone\n"
                . "<b>Сообщение</b>: $request->message\n"
        ]);

        Alert::success('Обращение принято', 'Скоро мы свяжемся с вами');
        return redirect()->back();
    }


}
