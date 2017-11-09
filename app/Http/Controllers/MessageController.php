<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        $message = new \App\Message;
        $message->sender_id = \Auth::user()->id;
        $message->recipient_id = \App\User::where('email', $request->email)->first()->id;
        $message->subject = $request->subject;
        $message->body = $request->body;
        $message->save();
        return redirect('/home');



      //   DB::table('messages')->insert([
      //   'sender_id' => ,
      //   'recipient_id' => input email,
      //   'subject' => 'input',
      //   'body' => 'input',
      //   'is_read' => false,
      //   'is_starred' =>false,
      //   'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      //   'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      // ]);

      //    return redirect('/home');


        // $message -> sender_id
        // $message -> recipient_id
        // $message -> subject
        // $message -> body
        // $message -> is_read
        // $message -> is_starred 


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$sender_id = $sender_id->sender();
        $message = \App\Message::find($id);
        return view('message', compact('message'));
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
