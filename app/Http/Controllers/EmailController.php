<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use App\Models\User;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function sendEmail()
{
    $email = 'quyenvuong0811@gmail.com';
    SendEmailJob::dispatch($email);
    return 'Email đang được xử lý và sẽ gửi qua Queue!';
}
}
