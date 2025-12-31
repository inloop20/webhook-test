<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GithubEvent;

class GithubWebhookController extends Controller
{

    public function home(){
        $events = GithubEvent::latest()->limit(20)->get();
        return view('welcome',compact('events'));
    }
    public function handle(Request $request){
    
        GithubEvent::create([
            'event_type' => $request->header('X-GitHub-Event'),
            'repository' => $request->input('repository.name'),
            'author'     => $request->input('pusher.name'),
            'message'    => $request->input('commits.0.message'),
        ]);

        return response()->json(['status' => 'success']);
    }
}
