<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DataTables;
use Session;
use Auth;
use Hash;
use Illuminate\Support\Facades\Hash as FacadesHash;

class AuthController extends Controller
{
    public function index()
    {
        if(empty(Session::get('email'))){
            return view('index');
        }else{
            return view('qrcode');
        }
        
    }
    public function register_post(Request $request)
    {
       
        try {
            $input = $request->all();
            $user = new User();
            $user->first_name = $input['firstname'];
            $user->last_name = $input['lastname'];
            $user->email = $input['email'];
            $user->password = Hash::make($input['password']);
           
            $result = $user->save();
            if($result){
                return redirect('/login');

            }
        } catch (\Throwable $th) {
            return redirect('/');
        }
       
    }
    public function login()
    {
        if(empty(Session::get('email'))){
        return view('login');}
        else{
            return view('qrcode');
        }
    }
    public function login_post(Request $request )
    {
        try {
            $input = $request->all();
            $results=User::where('email',$input['email'])->get();
            $result=Hash::check($input['password'],$results[0]['password']);
       
            Session::put('email', $results[0]['email']);
              
            if($result==1 && $results){
               
                return redirect('/qrcode');

            }
        } catch (\Throwable $th) {
            return redirect('/login');
        }
       
    }
    public function qrcode()
    {
        if(empty(Session::get('email'))){
            return view('login');}
            else{
                return view('qrcode');
            }
       
       
    }
    public function user_list()
    {
        if(empty(Session::get('email'))){
            return view('login');}
            else{
                return view('user_list');
            }
        
       
    }
    public function user_lists(Request $request)
    {
        if ($request->ajax()) {
            $data = User::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
       
    }
    public function logout(Request $request)
    {
        Session::flush();
        
        Auth::logout();

        return redirect('login');
    }
}

