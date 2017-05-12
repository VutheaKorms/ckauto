<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Response;
use Input;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $respose;

    public function __construct(Response $response)
    {
        $this->response = $response;
    }

    public function index()
    {
        return Response::json(User::get());
//        $user = App\User::orderBy('created_at')->get();
//        return view('index',['user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //return $request;
//        if ($request->isMethod('put')) {
//            $user = User::find($request->id);
//            if (!$user) {
//                return $this->response->errorNotFound('User Not Found');
//            }
//        } else {

            $user = new User();

            $user->name  = $request->input('name');
            $user->email  = $request->input('email');
            $user->password  = $request->input('password');
            $user->active  = $request->input('active');
            return $user;

//            $user->save();
        //}


//        if($user->save()) {
//            return $this->response->withItem($user, new  User());
//        } else {
//            return $this->response->errorInternalError('Could not updated/created a user');
//        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

}
