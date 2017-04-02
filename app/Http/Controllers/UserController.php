<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller {

    public function __construct() {

        $this->middleware('auth');
    }

    public function index(Request $request) {

        $user = $request->user();

        return view('user')->withUser($user);
    }

    public function update(Request $request) {

        $request->user()->update([
            'name' => $request->name,
            'email' => $request->email
        ]);
        
        $request->session()->flash('status', 'true');

        return redirect()->back();
    }

}
