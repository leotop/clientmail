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
        $expediaza1 = $request->expediaza1; 
        $expediaza2 = $request->expediaza2;
        $expediaza3 = $request->expediaza3;
        $delete = $request->delete;


        for ($i=1; $i<=$max_id; $i++)
        {
            if (isset($delete) && !empty($request->input($i)))
            {
                SendMail::destroy($i);
            } 

            if (isset($expediaza.$i) && !empty($request->input($i)))
            {
                $email = DB::table('sendmail')->where('id', $i)->value('email');
                $subject = $request->subject;
                $msg = $request->msg;

                // DB::table('mailtext')->insert(['msg' => $msg]);
                Mail::send('sablon.mail-'.$i, ['email' => $email, 'subject' => $subject, 'msg' => $msg], function($m) use ($email, $subject){
                    $m->to($email)->from('info@profsystem.md', 'ProfSystem')->subject($subject);
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
