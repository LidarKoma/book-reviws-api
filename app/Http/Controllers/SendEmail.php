<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
//use App\Requests\EnquiryFormRequest;
use App\Http\Requests\EnquiryFormRequest;

class SendEmail extends Controller
{
    public function fn_sendmail()
    {
    	$data = array(
    			'name' => "Mohit Sharma",
        );
        
    	
    	Mail::send('mailtemplate', $data, function ($message) {
    		$message->from('lidarkoma@gmail.com', 'Learning Laravel');
    	
    		$message->to('lidarkoma@gmail.com')->subject('There is a new ticket!');
    	});
    		 
    }

    


public function index()
{
    $data = array('title'=>"Enquiry Form");
    return view('enquiry_form', $data);
}

 
public function enquiryform(EnquiryFormRequest $request)
	{
		$name = $request->get('name');
		$email = $request->get('email');
		$phone = $request->get('phone');
		$enq_message = $request->get('enq_message');
		
		$data = array(
				'name' => $name,
				'email' => $email,
				'phone'=>$phone,
				'enq_message' => $enq_message
		);
		
		Mail::send('mailtemplate', $data, function ($message) {
			$message->from('lidarkoma2019@gmail.com', 'Test Mail');
			 
			$message->to('lidarkoma@gmail.com')->subject('This is test email message');
		});
			return redirect('/enquiryform')->with('status', 'We have received your Enquiry, Thanks!');
		
	}
}