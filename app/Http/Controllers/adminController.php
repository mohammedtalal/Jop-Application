<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\JobModel;
use App\Repositories\MailerRepositories;
use Illuminate\Http\Request;
use Mail;


class adminController extends Controller
{
    /**
     * @var mailer
     */
    private $mailer;
    public function __construct(MailerRepositories $mailer){
        $this->mailer= $mailer;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $employee = JobModel::all();
        $employee = JobModel::paginate(2,
            [
            'id','name','email','age',
            'job_type','programming_lang','day','phone','created_at'
            ],'page');

        return view('admin.adminPanel',compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.emailForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $this->mailer->sendEmailToUser($request);
        return redirect()->back()->with('success','Message successfully send');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = JobModel::find($id);
        $job->delete();
        if($job)
            return redirect('admin')->with('success','Application Deleted successfully');
        else
            return redirect('admin')->with('danger','Application not Deleted'); 
    }
}
