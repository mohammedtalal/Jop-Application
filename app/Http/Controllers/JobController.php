<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\JobRequest;
use App\JobModel;
use App\src\MailerInterface;
use Illuminate\Http\Request;
use Mail;

class JobController extends Controller
{
    private $mailer;
    public function __construct(MailerInterface $mailer){
        $this->mailer = $mailer;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('job.create');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobRequest $request)
    {
        JobModel::create([
            'name'              => $request->get('name'),
            'email'             => $request->get('email'),
            'age'               => $request->get('age'),
            'job_type'          => $request->get('job_type'),
            'programming_lang'  => implode(', ' , $request->get('programming_lang')),
            'day'               => $request->get('day'),
            'phone'             => $request->get('phone')
            ]);
        $this->mailer->sendEmailToAdmin($request);
        return redirect()->back()->with('success','Submit Job successfully');
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
        
    }
}
