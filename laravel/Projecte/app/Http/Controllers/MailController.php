<?php

namespace App\Http\Controllers;

use App\Mail\MailReserve;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function test(Request $request)
    {
        try {
            $mail = new MailReserve([
                'name' => 'Anonymous',
                'body' => 'Testing mail',
                'url'  => '/'
            ]);
            Mail::to('joroca@fp.insjoaquimmir.cat')->send($mail);
            echo '<h1>Mail send successfully</h1>';
        } catch (\Exception $e) {
            echo '<pre>Error - ' . $e .'</pre>';
        }
    }
}
