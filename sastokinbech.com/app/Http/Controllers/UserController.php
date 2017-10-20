<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Http\Requests;
use Session;
use App\Users;

class UserController extends Controller
{
    public function getsignup()
    {
        return view('user/register');
    }

    public function postSignup(Request $request)
    {   
        
        $this->validate($request,[
            'name' => 'required|min:5',
            'email' => 'email|required|unique:tbl_users',
            'password' => 'required|min:6',
            'district' => 'required',
            'city' => 'required',
            'phone' => 'required|numeric',
        ]);
        
        if ($request->hasFile('image')) {
            $ext = $request->image->getClientOriginalExtension();
            $randFileName = rand(100,100000);
            $imageName = $randFileName.'.'.$ext;
            $imagePath = public_path('user_image/' . $request->email );
            $uploaded = $request->image->move( $imagePath ,$imageName);
        }
        $user = new Users;
        $user_data = $user->saveUser($request->name,$imageName,$request->email,md5($request->password),$request->district,$request->city,$request->address1,$request->address2,$request->phone);

        if(count($user_data)==1){
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            $_SESSION['user_data'] = $user_data[0];           
            return redirect('user');
        }else{
            return redirect()->route('user.getsignup')->with('Signup','Invalid Credentials! Please try again');
        }

    }


    public function getLogin()
    {
        return view('user/login');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request,[
            'email' => 'email|required',
            'password' => 'required|min:6',
        ]);

        $user = new Users();
        $user_data = $user->getUser($request->email,md5($request->password));
        $user_data = $user_data->toArray();
        if(count($user_data)==1){
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            $_SESSION['user_data'] = $user_data[0];
            //print_r($_SESSION);exit;
            
            return redirect('user');
        }else{
            return redirect()->route('user.getlogin')->with('loginerror','Invalid Credentials! Please try again');
        }
    }

    public function signout(Request $request){
        if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
        $_SESSION['user_data'] = array();

        return redirect('/');
    }

    public function user()

    {  
        if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
        if (empty($_SESSION["user_data"])) {
            return redirect()->route('user.getlogin');
           
        }else{
            $user = new USers();
            $id = $_SESSION["user_data"]["user_id"];
            $user_data = $user->getUserById($id);
            
            return view('user.user_profile',['user_data'=>$user_data]);
        }
        
        
    }


     public function editProfile($id)
    {
        $user = new Users;
        $user_data = $user->getUserById($id);
        return view('user/edit_user_profile',['user_data'=>$user_data]);
    }


    public function updateProfile(Request $request)
    {
        
        $this->validate($request,[
            'name' => 'required|min:5',
            'email' => 'email|required',
            'district' => 'required',
            'city' => 'required',
            'contact' => 'required|numeric',
        ]);

        $user =new Users;
        $user_data = $user->updateUser($request->user_id,$request->name,$request->email,$request->district,$request->city,$request->address1,$request->address2,$request->contact);
        //print_r($user_data); exit();
        $user_data = $user->getUserById($request->user_id);
        if($user_data){
            Session::flash('flash_message', 'Profile is sucessfully Edited!');
            return view('user.user_profile',['user_data'=>$user_data]);
        }
    }

    public function browseImage($id){
         $user = new Users();
         $user_data = $user->getUserById($id);
         return view('user.profileImage',['user_data'=>$user_data]);
    } 
    public function edit_profile_image(Request $request){
        if ($request->hasFile('image')) {
            $ext = $request->image->getClientOriginalExtension();
            $randFileName = rand(100,100000);
            $imageName = $randFileName.'.'.$ext;
            $imagePath = public_path('user_image/' . $request->email );
            $uploaded = $request->image->move( $imagePath ,$imageName);
        }

        $user =new Users;
        $user_data = $user-> updateprofileImage($request->user_id,$imageName);
        $user_data = $user->getUserById($request->user_id);
        if($user_data){
            Session::flash('flash_message', 'ProfileImage is sucessfully Edited!');
            return view('user.user_profile',['user_data'=>$user_data]);
        }
    }

   
}
