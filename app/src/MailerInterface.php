<?php 
namespace App\src;
use Illuminate\Http\Request;
interface MailerInterface {
	public function sendEmailToAdmin(Request $request);
	public function sendEmailToUser(Request $request);
}
?>