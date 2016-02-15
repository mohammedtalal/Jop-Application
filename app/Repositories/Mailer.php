<?php 
namespace App\Repositories;

use App\Http\Requests;
use App\JobModel;
use Illuminate\Http\Request;
use Mail;

/**
* This class responsible for sending emails
*/
class Mailer implements MailerRepositories {

	public function sendEmailToAdmin(Request $request){
		return Mail::send('mailMessage',['name'=>$request->name,'email'=>$request->email],function($msg) use ($request) {
            	$msg->to($request->email,'Admin')
            	->subject("New Allpication submitted");
        	});
	}

	public function sendEmailToUser(Request $request){
		return Mail::send('adminMessage',['bodyMessage'=>$request->message],function($msg) use ($request) {
	            $msg->to($request->email)
	            ->subject($request->subject);
       		 });
	}
}
?>