<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(){
        $objectDemo = new \stdClass();
        $objectDemo->receiver='Yermakhan';
        $objectDemo->sender='Yermon';
        Mail::to('qyermon@gmail.com')->send(new DemoEmail($objectDemo));
    }
}
