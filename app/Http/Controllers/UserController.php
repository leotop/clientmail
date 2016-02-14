<?php

namespace App\Http\Controllers;

use DB;
use Carbon\Carbon;
use App\Report;
use App\SendMail;

use Mail;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

    public function home()
    {
        $send = SendMail::all();

    	return view('page.home', compact('send'));
    }

    public function add_client(Request $request)
    {
    	$send = new SendMail;
        $send->nume = $request->nume;
        $send->prenume = $request->prenume;
        $send->email = $request->email;
        $send->ziua = $request->ziua;
        $send->luna = $request->luna;
        $send->sexul = $request->sexul;
        $send->compania = $request->compania;
        $send->save();

        return redirect()->action('UserController@home');
    }

    public function send_mail(Request $request)
    {
        $send = SendMail::all();
        $max_id = SendMail::max('id');
        $delete = $request->delete;


        for ($i=1; $i<=$max_id; $i++)
        {
            if (isset($delete) && !empty($request->input($i)))
            {
                SendMail::destroy($i);
            } 

            $expediaza = $request->expediaza.$i; 
            if (isset($expediaza) && !empty($request->input($i)))
            {
                $email = DB::table('sendmail')->where('id', $i)->value('email');
                $from = $request->from;
                $from_name = $request->from-name;
                $subject = $request->subject;
                $msg = $request->msg;
                
                //Create report a send message             
                $key = md5(Carbon::now()).rand(0, 100000);
                $key_link = 'http://'.$_SERVER['SERVER_NAME'].'?report='.$key;

                // Send message
                Mail::send('sablon.mail-'.$i, ['email'=>$email, 'subject'=>$subject, 'msg'=>$msg, 'from'=>$from, 'from_name'=>$from_name], function($m) use ($email, $subject, $from, $from_name){
                    $m->to($email)->from($from, $from_name)->subject($subject);
                });
            }
        }
        // return view('page.home', compact('send'));
       return redirect()->action('UserController@home');
    }

    public function search_client(Request $request)
    {
        $email = $request->email;
        $nume = $request->nume;
        $prenume = $request->prenume;
        $ziua = $request->ziua;
        $luna = $request->luna;
        $sexul = $request->sexul;
        $compania = $request->compania;
        $send = SendMail::where('email', 'like', "%$email%")
                ->where('nume', 'like', "%$nume%")
                ->where('prenume', 'like', "%$prenume%")
                ->where('ziua', 'like', "%$ziua%")
                ->where('luna', 'like', "%$luna%")
                ->where('sexul', 'like', "%$sexul%")
                ->where('compania', 'like', "%$compania%")
                ->get();

        return view('page.home', compact('send'));
    }

}
