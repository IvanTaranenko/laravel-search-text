<?php

namespace App\Http\Controllers;

use Notification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Notifications\Facades\Vonage;
use App\Notifications\SMSNotification;

class SmsController extends Controller
{
    public function index()
    {
        $user = User::first();

        $project = [
            'greeting' => 'Hi ' . $user->name . ',',
            'body' => 'This is the project assigned to you.',
            'thanks' => 'Thank you this is from codeanddeploy.com',
            'actionText' => 'View Project',
            'actionURL' => url('/'),
            'id' => $user->id
        ];

        Notification::send($user, new SMSNotification($project));
    }
}
