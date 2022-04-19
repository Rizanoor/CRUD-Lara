<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function account()
    // {
    //     return view('pages.user.account-setting.index');
    // }

    public function index()
    {
        $user = Auth::user();

        return view('pages.user.account-setting.index',[
            'user' => $user
        ]);
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $redirect)
    {


        $data = $request->all();
        $item = Auth::user();

        if ($request->password) {
            $data['password'] =  bcrypt($request->password);
        } else {
            unset($data['password']);
        }
        
        // if ($request->hasFile('image')) {
        //     $filename = $request->image->getClientOriginalName();
        //     $request->image->storePubliclyAs('images',$filename, 'public');
        //     user::find(1)->update(['avatar'=> $filename]);
        // }

        // return $request->file('image')->update('avatar');

        // $path = $request->file('avatar')->store('avatars');
 
        // return $path;
        
        // return 'upload';

        $item->update($data);

        return redirect()->route($redirect);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function uploadAvatar(Request $request)
    {
        
    }
}

