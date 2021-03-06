<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id=Session::get('id');
        if($id!=NULL){
            return Redirect::to('/dashboard')->send();

        }
      return view('admin.admin_login');
    }

    public function admin_login_check(Request $request)
    {
        $admin_email_address=$request->admin_email_address;
        $admin_password=md5($request->admin_password);

        $users = DB::table('tbl_admin')
                 ->where('admin_email_address', $admin_email_address)
                 ->where('admin_password', $admin_password)
                 ->first();
                
      if($users){

              Session::put('admin_name',$users->admin_name);
              Session::put('id',$users->id);
        return Redirect::to('/dashboard');
      }
      else{
          Session::put('exception','Email or Password Invalid');
         return Redirect::to('admin_panel');
      }
       // return view('admin.admin_master');
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
        //
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
    public function destroy($id)
    {
        //
    }
}
