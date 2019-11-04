<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\NgodingEmail;
use Illuminate\Support\Facades\Mail;

class NgodingEmailController extends Controller
{
    public function index(){
        Mail::to("testing@ngoding.com")->send(new NgodingEmail());

        return "Email telah dikirim";
    }
}
