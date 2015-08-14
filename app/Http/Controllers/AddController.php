<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\UserDetail;
use App\User;
use Hash;
use Auth;
class AddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        if (Auth::check()) return view('create.addform');
        return redirect()->to('/auth/login');
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
    public function store(Requests\CreateUserRequest $request)
    {
        $all = UserDetail::all();
        
        $fullName = $request->input('fname') . ' ' . $request->input('mname') . ' ' . $request->input('lname');
        
        $userInsert = array(
            'name' => $fullName,
            'email' => $request->input('username'),
            'password' => Hash::make($request->input('password')),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()                       
        );
        $user = User::create($userInsert); 

        $userdetailInsert = array(
            'fname' => $request->input('fname'),
            'mname' => $request->input('mname'),
            'lname' => $request->input('lname'),
            'address' => $request->input('address'),
            'contact_no' => $request->input('contactno'),
            'img' => '/imgs/renz.jpg',
            'employee_id' => $request->input('empid'),
            'user_level_id' => '1',
            'service_years' => '0',
            'date_employed' => '',
            'user_id' => $user->id,
            'basic_salary' => '0',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()                       
        );

        UserDetail::insert($userdetailInsert);

        return view('create.success');
        
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
    public function destroy($id)
    {
        //
    }
}
