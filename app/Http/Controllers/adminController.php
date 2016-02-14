<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\JobModel;
use Mail;
use DB;


class adminController extends Controller
{


    public function __construct(){
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
        /*  
            $request->subject
            $request->message
            dd($request->subject);

            To Test :
            here when i click submit without write anything into text inputs 
            will send to static email by thier id=1 ...
         */
        $user = JobModel::find(1);
         Mail::send('adminMessage',['name'=>'Admin'],function($msg) use ($user) {
            $msg->to($user->email,'Admin')
            ->subject('Thanks for applying Job');
        });
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
