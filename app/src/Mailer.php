<?php 
namespace App\src;

use App\Http\Requests;
use App\JobModel;
use Illuminate\Http\Request;
use Mail;

/**
* This class responsible for sending emails
*/
class Mailer implements MailerInterface {

	public function sendEmailToAdmin(Request $request){
		return Mail::send('messages.mailMessage',['name'=>$request->name,'email'=>$request->email],function($msg) use ($request) {
            	$msg->to($request->email,'Admin')
            	->subject("New Allpication submitted");
        	});
	}

	public function sendEmailToUser(Request $request){
		return Mail::send('messages.adminMessage',['bodyMessage'=>$request->message],function($msg) use ($request) {
	            $msg->to($request->email)
	            ->subject($request->subject);
       		 });
	}
}
?>