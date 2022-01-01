<?php

namespace Modules\Account\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;


class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        if(Auth::check())
          return view('account::index', ['user' => Auth::user()]);
        return redirect()->route('login');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('account::create');
    }


    public function changename(Request $request)
    {
        $request->validate([ 'name' => 'required' ]);
        $user = Auth::user();
        $user->name = $request->name;
        $user->save();
        return back()->with('message', 'Name has been changed');
    }

    public function changepassword(Request $request)
    {
        $request->validate([
             'password' => ['required'],
             'confirmpassword' => ['same:password']  
        ]);
        $user = Auth::user();
        $user->password = Hash::make($request->password);
        $user->save();
   
        return back()->with('message', 'Your Password has been changed');
    }
    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('account::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('account::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
