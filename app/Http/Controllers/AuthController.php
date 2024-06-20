<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\RegisterMail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\ForgotPasswordMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function login_admin()
    {
        // if(!empty(Auth::check()) && Auth::user()->is_admin == 1)
        // {
        //     return redirect('admin/dashboard');
        // }
        return view('layouts.app');
    }

    public function auth_login_admin(Request $request)
    {
        $remember = !empty($request->remember) ? true : false;
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'is_admin' => 1, 'status' => 0], $remember))
        {
            return redirect('admin/dashboard');
        }
        else
        {
            return redirect()->back()->with('error', 'Please enter valid email and password');
        }
        return view('admin.auth.login');
    }

    public function logout_admin()
    {
        Auth::logout();
        return redirect(url(''));
    }

    public function auth_login(Request $request)
    {
        $remember = !empty($request->remember) ? true : false;
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'is_delete' => 0, 'status' => 0], $remember))
        {
            if(Auth::user()->is_admin == 1)
            {
                return redirect('admin/dashboard');
            }
            else if(Auth::user()->is_admin == 2)
            {
                return redirect('subadmin/dashboard');

            }
         }
        else
        {
        //    $json['status'] = false;
        //    $json['message'] = "Please enter current email and password";
        return redirect('');
        }

        // echo json_encode($json);
    }

    public function auth_register(Request $request)
    {
        $checkEmail = User::checkEmail($request->email);

        if(empty($checkEmail))
        {
            $save = new User;
            $save->name = trim($request->name);
            $save->email = trim($request->email);
            $save->password = Hash::make($request->password);
            $save->is_admin = 2;
            $save->save();

            // Mail::to($save->email)->send(new RegisterMail($save));

            // $json['status'] = true;
            // $json['message'] = "You have been successfully Registered. Please verify your email address.";
            return redirect()->back()->with('success', "You are successfully Registered, Please Login with correct email and password.");
        }
        else
        {
        //     // $json['status'] = false;
        //     // $json['message'] = "This email is already in use!!";
        return redirect()->back()->with('error', "Your Email already in use, Please Try with another Email");
        }

        // echo json_encode($json);
    }

    public function activate_email($id)
    {
        $id = base64_decode($id);
        $user = User::getSingle($id);
        $user->email_verified_at = date('Y-m-d H:i:s');
        $user->save();
        return redirect(url(''))->with('success', "Email Successfully verified");
    }

    public function forgot_password(Request $request)
    {
        $data['meta_title'] = "Forgot Password";
        return view('auth.forgot', $data);
    }
    public function auth_forgot_password(Request $request)
    {
        $user = User::where('email', '=', $request->email)->first();
        if(!empty($user))
        {
            $user->remember_token = Str::random(30);
            $user->save();
            // Mail::to($user->email)->send(new ForgotPasswordMail($user));
            return redirect()->back()->with('success', "Please check your email and reset your password");
        }
        else
        {
            return redirect()->back()->with('error', "Email not found in the system");
        }
    }

    public function reset($token)
    {
        $user = User::where('remember_token', '=', $token)->first();
        if(!empty($user))
        {
            $data['user'] = $user;
            $data['meta_title'] = "Reset Password";
            return view('auth.reset', $data);
        }
        else
        {
            abort(404);
        }
    }

    public function auth_reset($token, Request $request)
    {
        if($request->password == $request->cpassword)
        {
            $user = User::where('remember_token', '=', $token)->first();
            $user->password = Hash::make($request->password);
            $user->remember_token = Str::random(30);
            $user->save();

            return redirect(url(''))->with('success', "Password Reset Successfully");
        }
        else
        {
            return redirect()->back()->with('error', "Password and confirm Password does not match");
        }
    }

    public function subadmin()
    {
        $data['header_title'] = "Subadmin";
        return view('subadmin.dashboard',$data);
    }
}
