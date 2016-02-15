<?php

namespace App\Http\Controllers;

use DB;
use Carbon\Carbon;
use App\Report;
use App\SendMail;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        return view('page.index');
    }

    public function test()
    {
        $msg = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget mollis ante, a commodo nunc. Suspendisse venenatis velit sit amet nisi faucibus, ut finibus dolor volutpat. Duis tempor congue elit, id pulvinar libero faucibus vel. Ut eu lacus felis. Vestibulum sed tellus in justo sollicitudin eleifend. Etiam sit amet lectus at urna imperdiet condimentum sed eget leo. Etiam id rhoncus purus. Nulla facilisi.
        Phasellus et pulvinar odio, vitae sodales velit. Ut eu pellentesque nisl. Mauris a tortor massa. Nunc feugiat efficitur purus, fringilla finibus justo. Praesent varius vulputate lobortis. Nam quis diam lobortis, tincidunt felis id, ultrices leo. Maecenas pretium est ac tempus dictum. Etiam tincidunt eleifend est, quis dictum mi hendrerit quis. Donec at scelerisque erat. Proin laoreet, erat sit amet sagittis tincidunt, lectus nisl euismod enim, eget lacinia lectus nisi at tortor. Maecenas rhoncus suscipit fermentum. Fusce dapibus, risus a sagittis tincidunt, libero nibh tincidunt est, vel tincidunt sapien ex non urna.
        Aliquam laoreet ac diam id faucibus. Pellentesque quis urna nec urna egestas posuere nec at nibh. Cras et ipsum odio. Aliquam eros nulla, malesuada a consequat at, mattis at erat. Integer tempor quam euismod, volutpat tortor vitae, iaculis felis. Nulla feugiat est eleifend sem tempus pellentesque. In lorem neque, tristique quis imperdiet sit amet, tristique egestas arcu. Donec laoreet maximus accumsan. Nunc hendrerit velit leo, eget fermentum est convallis eu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla elementum bibendum felis, ut egestas eros viverra vel. Vivamus blandit non tortor dignissim consequat. Sed bibendum malesuada turpis.';
        
        return view('sablon.mail-1', compact('msg'));
    }

    public function test2()
    {
        $msg = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget mollis ante, a commodo nunc. Suspendisse venenatis velit sit amet nisi faucibus, ut finibus dolor volutpat. Duis tempor congue elit, id pulvinar libero faucibus vel. Ut eu lacus felis. Vestibulum sed tellus in justo sollicitudin eleifend. Etiam sit amet lectus at urna imperdiet condimentum sed eget leo. Etiam id rhoncus purus. Nulla facilisi.
        Phasellus et pulvinar odio, vitae sodales velit. Ut eu pellentesque nisl. Mauris a tortor massa. Nunc feugiat efficitur purus, fringilla finibus justo. Praesent varius vulputate lobortis. Nam quis diam lobortis, tincidunt felis id, ultrices leo. Maecenas pretium est ac tempus dictum. Etiam tincidunt eleifend est, quis dictum mi hendrerit quis. Donec at scelerisque erat. Proin laoreet, erat sit amet sagittis tincidunt, lectus nisl euismod enim, eget lacinia lectus nisi at tortor. Maecenas rhoncus suscipit fermentum. Fusce dapibus, risus a sagittis tincidunt, libero nibh tincidunt est, vel tincidunt sapien ex non urna.
        Aliquam laoreet ac diam id faucibus. Pellentesque quis urna nec urna egestas posuere nec at nibh. Cras et ipsum odio. Aliquam eros nulla, malesuada a consequat at, mattis at erat. Integer tempor quam euismod, volutpat tortor vitae, iaculis felis. Nulla feugiat est eleifend sem tempus pellentesque. In lorem neque, tristique quis imperdiet sit amet, tristique egestas arcu. Donec laoreet maximus accumsan. Nunc hendrerit velit leo, eget fermentum est convallis eu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla elementum bibendum felis, ut egestas eros viverra vel. Vivamus blandit non tortor dignissim consequat. Sed bibendum malesuada turpis.';
        
        return view('sablon.mail-2', compact('msg'));
    }

    public function test3()
    {
        $msg = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget mollis ante, a commodo nunc. Suspendisse venenatis velit sit amet nisi faucibus, ut finibus dolor volutpat. Duis tempor congue elit, id pulvinar libero faucibus vel. Ut eu lacus felis. Vestibulum sed tellus in justo sollicitudin eleifend. Etiam sit amet lectus at urna imperdiet condimentum sed eget leo. Etiam id rhoncus purus. Nulla facilisi.
        Phasellus et pulvinar odio, vitae sodales velit. Ut eu pellentesque nisl. Mauris a tortor massa. Nunc feugiat efficitur purus, fringilla finibus justo. Praesent varius vulputate lobortis. Nam quis diam lobortis, tincidunt felis id, ultrices leo. Maecenas pretium est ac tempus dictum. Etiam tincidunt eleifend est, quis dictum mi hendrerit quis. Donec at scelerisque erat. Proin laoreet, erat sit amet sagittis tincidunt, lectus nisl euismod enim, eget lacinia lectus nisi at tortor. Maecenas rhoncus suscipit fermentum. Fusce dapibus, risus a sagittis tincidunt, libero nibh tincidunt est, vel tincidunt sapien ex non urna.
        Aliquam laoreet ac diam id faucibus. Pellentesque quis urna nec urna egestas posuere nec at nibh. Cras et ipsum odio. Aliquam eros nulla, malesuada a consequat at, mattis at erat. Integer tempor quam euismod, volutpat tortor vitae, iaculis felis. Nulla feugiat est eleifend sem tempus pellentesque. In lorem neque, tristique quis imperdiet sit amet, tristique egestas arcu. Donec laoreet maximus accumsan. Nunc hendrerit velit leo, eget fermentum est convallis eu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla elementum bibendum felis, ut egestas eros viverra vel. Vivamus blandit non tortor dignissim consequat. Sed bibendum malesuada turpis.';
        
        return view('sablon.mail-3', compact('msg'));
    }

    public function report(Request $request) 
    {
        $report = $request->report;
        Report::where('key', $report)->update(['status', 'citit']);
    }
    
    public function uploadImage(Request $request) 
    {
        $file = $request->file('upload');
        $uploadDestination = public_path() . '/uploads/about';
        $filename = preg_replace('/\s+/', '', $file->getClientOriginalName());
        $fileName = md5($filename) . "_" . $filename;
        $file->move($uploadDestination, $fileName);
    }

    public function browseImage(Request $request)
    {
        DB::table('test')->insert(['msg' => 'work fine']);
        // $send = SendMail::all();
        $test = $_GET['CKEditorFuncNum'];
        $images = [];
        $files = \File::files(public_path() . '/uploads/about');
        foreach ($files as $file) 
        {
            $images[] = pathinfo($file);
        }
        return view('page.home', ['files' => $images, 'test' => $test]);
    }
}
