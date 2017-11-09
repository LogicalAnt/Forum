<?php

namespace App\Http\Controllers;

use App\Thread;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ThreadController extends Controller
{
    /**
     * show all threads
     * @param \App\Thread $thread
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function __construct ()
    {
        $this->middleware('auth');
    }
    
    public function showAllThread(Thread $thread)
    {
        $threads=Thread:: orderBy('created_at', 'desc')->paginate(10);
        return view('threads.index', compact('threads'));
    }


    public function showSingleThread(Thread $thread)
    {
        $replies = $thread->replies()->latest()->get();
        return view('threads.thread', compact('thread', 'replies'));
    }
    public function editorView()
    {
        return view('threads.editor');
    }
    public function store (Request $request)
    {
        
        Thread::create([
            'user_id'=>auth()->id(),
            'body'=>$request["editor1"],
            'title'=>$request["title"],
        ]);

        return redirect('/threads');
    }
    
    
}
