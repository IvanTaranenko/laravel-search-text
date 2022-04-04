<?php

namespace App\Http\Controllers;

use App\Mail\AttachementMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function email()
    {
        Mail::to('taranenko@gmail.com')->send(new AttachementMail());
    }
}
