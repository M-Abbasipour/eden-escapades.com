<?php

namespace eden\Http\Controllers;

use eden\Models\User;
use eden\Models\Status;
use Illuminate\Http\Request;
use Auth;

class StatusController extends Controller
{
    public function postStatus(Request $request)
    {
        $this->validate($request, [
            'status' => 'required|max:1000',
        ]);
        
        Auth::user()
            ->statuses()
            ->create([
               'body' => $request['status'],
            ]);
        
        return redirect()
            ->route('home')
            ->with('info', 'Status posted');
    }
    
    public function postReply(Request $request, $statusId)
    {
        $this->validate($request, [
            "reply-{$statusId}" => 'required|max:1000',
        ], [
            'required' => 'The reply body is required.'
        ]);
        
        $status = Status::notReply()->find($statusId);
        
        if(!$status) {
            return redirect()->route('home');
        }
        
        if (!Auth::user()->isFriendsWith($status->user) && Auth::user()->id !== $status->user->id) {
            return redirect()->route('home');
        }
        
        $reply = Status::create([
           'body' => $request["reply-{$statusId}"], 
        ])->user()->associate(Auth::user());
        
        $status->replies()->save($reply);
        
        return redirect()->back();
    }
}