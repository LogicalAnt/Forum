<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

use App\Reply;

class ReplyController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth')->except('showUser');
	}
	

	public function show ()
	{
		dd('hit');
	}
	
	public function store (Request $request, $thread)
	{
		/**
		 * validate a reply request
		 */
		//dd(AUth::id());

		$a=$request->validate([
			'reply'=>'required|max:350|min:2',
		]);
		
		//store a reply
		Reply::create([
			'body' => $request['reply'],
			'user_id'=>Auth::id(),
			'thread_id' => $thread
		]);

		return redirect('threads/'.$thread);

	}

	public function showUser (User $user)
	{
		return $user;
		
	}
	
	

}
