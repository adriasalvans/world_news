<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Laracats\Flash\Flash;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserEditRequest;
use App\Category;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('id','ASC');
        return view('users.create')->with('categories',$categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $user = new User($request -> all());
        $user->password= bcrypt($request->password);
        $user->save();
        flash("User ". $user->name . " created!")->success();
        return redirect()->route('users.show',$user);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user= User::find($id);
        return view('users.mypage')->with('user',$user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('mypage.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserEditRequest $request)
    {
        // $attr = $request->validate([...]);
        auth()->user()->update($request->validated());

        flash('User '. $user->name . ' edited')->warning();
        return redirect()->route('users.show',$user);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        auth()->user()->delete();

        return rediret('/');

        // $user = User::find($id);
        // $user->delete();
        // flash('User '. $user->name . ' deleted')->error();
        // return redirect()->route('/')->with('sucess', 'asdasdas');

    }
}
