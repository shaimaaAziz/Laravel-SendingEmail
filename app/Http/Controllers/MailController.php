<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('welcome', compact('users'));
    }

    public function basic_email()
    {
        $data = array('name' => "Virat Gandhi");

        Mail::send(['text' => 'mail'], $data, function ($message) {
            $message->to('s@gmail.com', 'Tutorials Point')->subject('Laravel Basic Testing Mail');
            $message->from('xyz@gmail.com', 'Virat Gandhi');
        });
        echo "Basic Email Sent. Check your inbox.";
    }

    public function html_email()
    {
        $data = array('name' => "Virat Gandhi");
        Mail::send('mail', $data, function ($message) {
            $message->to('shimaa1751998@gmail.com', 'Tutorials Point')->subject('Laravel HTML Testing Mail');
            $message->from('xyz@gmail.com', 'Virat Gandhi');
        });
        echo "HTML Email Sent. Check your inbox.";
    }

    public function attachment_email()
    {
        $data = array('name' => "Virat Gandhi");
        Mail::send('mail', $data, function ($message) {
            $message->to('s@gmail.com', 'Tutorials Point')->subject('Laravel Testing Mail with Attachment');
            $message->attach(public_path('media\image.png'));
            $message->attach(public_path('media\test.txt'));

            $message->from('xyz@gmail.com', 'Virat Gandhi');
        });
        echo "Email Sent with attachment. Check your inbox.";
    }

    // get data from database and send email to varity user
    public function view($id)
    {
    
       $contact = User::find($id);
     
        $toemail = $contact->email;
        $name = $contact->name;
        $data = array("name" => $contact->name);
        
        Mail::send('mail', $data, function ($message) use ($toemail) {

            $message->to($toemail)->subject("  النظر في اقتراحاتكم    ");
            $message->from("s@gmail.com");
        });
        echo "Basic Email Sent. Check your inbox.";
        return redirect()->back();
    }


}
