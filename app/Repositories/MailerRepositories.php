<?php 
namespace App\Repositories;
use Illuminate\Http\Request;
interface MailerRepositories {
	public function sendEmailToAdmin(Request $request);
	public function sendEmailToUser(Request $request);
}
?>