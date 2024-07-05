<?php

namespace App\Http\Controllers;

use App\Mail\ContactAdminMail;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Message;

class IndexController extends Controller
{
  public function index()
  {
    return view('index');
  }

  public function submit(Request $req)
  {
    // バリデーションはJS
    // DBに登録
    $message = new Message();
    $message->fill($req->except('_token'))->save();

    // 自動返信メール
    Mail::to($req['email'])->send(new ContactFormMail($req));
    Mail::to('contact@portfolio-ronishi.com')->send(new ContactAdminMail($req));

    return true;
  }
}
