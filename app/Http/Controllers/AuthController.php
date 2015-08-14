<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        if (Auth::check()) return redirect()->to('/home');
        return view('login.authtest');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $authdetails = array(
            'email' => $request->input('email'),
            'password' => $request->input('password')
        );
        if (Auth::attempt($authdetails)) {
            // Authentication passed...
            return redirect()->to('/home');
        }
        else {
            return back()->with('error', 'Invalid username or password')->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy()
    {
        Auth::logout();
        return redirect()->to('auth/login');
    }

    // added functions below

     public function addform()
    {
         if (Auth::check()) return view('create.addform');
        return redirect()->to('/auth/login');
    }

    public function viewusers()
    {
         if (Auth::check()) return view('view.users');
        return redirect()->to('/auth/login');
    }

     public function profile()
    {
         if (Auth::check()) return view('errors.503');
        return redirect()->to('/auth/login');
    }
}
