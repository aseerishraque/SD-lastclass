<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendEmailOnContact;
class EmailController extends Controller
{
    public function send(){
    	$to = 'aniksen.cuet09@gmail.com';
    	$sub = 'Contact Email';
    	$msg = 'Hello.. this is a contact message';
    	$contact = '01674454285';
    	$moreUsers = 'rimimahabuba@gmail.com';
    	Mail::to($to)
    		->cc($moreUsers)
    		->send( new SendEmailOnContact($sub, $msg, $contact) ); 
    }
}
