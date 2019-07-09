<?php

namespace App\Http\Controllers;
use App\service;
use App\work;
use App\Http\Resources\ServiceResource;



use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Mail;
//use App\Mail\SendMailable;
use Mail;


class ServiceController extends Controller
{

    public function index()
    {
      return ServiceResource::collection(Service::with('works')->paginate(25));
    }
    public function show(Service $service)
    {
        return new ServiceResource($service);


       /* $services=Service::with('works')->get();
      $response= [
        'services'=> $services
          ];
         return response()->json($response,200);
         */
    }
    public function findById(Request $request, $id)
    {
        $services=Service::with('works')->find($id);
      $response= [
          'services'=> $services
          ];
          return response()->json($response,200);
    }
    public function work()
    {
        $services=Work::all();
      $response= [
          'services'=> $services
          ];
          return response()->json($response,200);
    }

    public function create()
    {
        return view('contact.create');
    }


    

 public function mail(Request $request)
    {
      // $title = $request->input('title')
        $title = "lppp";
        $content = "lkkklklk lk kl klk klk k klk k lk";
        $subject="lidar komaoo";
        $from='lidarkoma@yahoo.com';
  // $data = [
          //'content' => $content
      //];
      
      /*$subject = "Test Email";
      $body = "<html><body><h1>Test email</h1></body></html>";
      $to = "lidarkoma@gmail.com";
      $headers = "From: me@test.com\r\n";
      $headers .= "MIME-Version: 1.0\r\n";
      $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
      mail($to, $subject, $body, $headers);*/

      //Mail::to("lidarkoma@gmail.com")->send(new SendMailable($title,$content));
      /*Mail::to('lidarkoma@gmail.com')->send(new SendMailable($title,$content),function ($message) use ($from)
      {
      $message->from('lidarkoma19@gmail.com','Christian Nwamba');
    });
    return response()->json(['message' => 'Request completed']);
      

    }*/
     
        /*Mail::send(['text'=>'emails.send'], ['title' => $title, 'content' => $content], function ($message) use ($subject,$from)
        {
          //$message->setBody($body);


          $message->from(config('mail.from.address'), config("app.name"));

            $message->to('lidarkoma2019@gmail.com');
            $message->subject($subject);

            //$message->setBody('<h1>Hi, welcome user!</h1>', 'text/html'); // for HTML rich messages

            
            


        });
        return response()->json(['message' => 'Request completed']);

      }*/
      $data = array('name'=>"Virat Gandhi");
   
      Mail::send(['text'=>'emails.send'], $data, function($message) {
         $message->to('lidarkoma@gmail.com', 'Tutorials Point')->subject
            ('Laravel Basic Testing Mail');
         $message->from('lidarkoma@yahoo.com','Virat Gandhi');
      });
   return 'Email was sent';
      
  }
 //return 'Email was sent';
    
}
