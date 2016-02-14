<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\JobRequest;
use App\JobModel;
use Illuminate\Http\Request;
use Mail;

class JobController extends Controller
{

    

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
         //$check =  implode(', ' ,  $request->programming_lang);
        // dd($check);

        JobModel::create($request->all());
        
       // This to send a message to Admin to know after every submit that there is anew person for the job.
        Mail::send('mailMessage',['name'=>$request->name,'email'=>$request->email],function($msg) {
            $msg->to('mohammed.talal2016@hotmail.com','Admin')
            ->subject("New Allpication submitted");
        });
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
        //
    }
}
