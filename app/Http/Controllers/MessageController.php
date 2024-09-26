<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages = Message::orderBy("created_at","desc")->paginate(10);
        return view("components.showmessage", compact("messages"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         Message::create([
            "name"=>$request->name,
             "email"=>$request->email,
           "subject"=>$request->subject,
            "message"=>$request->message,
            "status"=>0,
            "created_at"=>now(),
            "updated_at"=>now()
         ]);
        return redirect('/#contact')->with("success","Message is sent successfuly");
    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
         Message::find($message->id)->update([
            "name"=>$message->name,
            "email"=>$message->email,
            "subject"=>$message->subject,
            "message"=>$message->message,
            "status"=> 1,
         ]);

         return view("components.detailmessage", compact("message"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        $message->delete();
        return back();
    }
    // app/Http/Controllers/MessageController.php

       public function getPendingMessageCount()
       {
    $count = Message::where('status', 0)->count();
    return response()->json(['count' => $count]);
       }

}
