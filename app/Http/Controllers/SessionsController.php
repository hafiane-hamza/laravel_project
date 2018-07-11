<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest' ,['except' => 'destroy']);
    }
    public function create()
    {
        return view('sessions.create');
    } 
    public function store()
    {
        //Attempt to authenticate the user
        if (! auth()->attempt(request(['email', 'password']))){

            return back();
        }

        return redirect()->home(); 

    }


        //if not redirect back.




        //If so, sign in.


        



        //Redirect to the home page.


    public function destroy()
    {
        auth()->logout();

        return redirect()->home();
    }
}
