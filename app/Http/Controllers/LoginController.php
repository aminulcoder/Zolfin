<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function register(){
        return view('authentication.register', [
            'title' => 'Register'
        ]);
    }

    public function registerPost(Request $request){

        $info = $request->validate([
            'name' => 'required|max:200',
            'username' => 'required',
            'photo' => 'required|image|mimes:jpg,png',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8'
        ]);

        $user = new User;

        $user->name = $request->name;
        $user->username = $request->username;

        $photo_name = time() . '-' . $request->file('photo')->getClientOriginalName();
        $request->file('photo')->storeAs('/public/images', $photo_name);

        $user->photo = $photo_name;
        $user->email = $request->email;
        $user->password = bcrypt( $request->password );

        if( $user->save() ){

            Auth::login($user);

            return redirect('/dashboard')->with('message', "Registration successful");
        }


    }

    // public function goToDB( array $data ){

    //     return User::create([
    //         'name' => $data['name'],
    //         'username' => $data['username'],
    //         'photo' => $data['photo'],
    //         'email' => $data['email'],
    //         'password' => bcrypt( $data['password'] )
    //     ]);


    // }

    public function dashboard(){
        return view('admin.dashboard', [
            'title' => 'Dashboard'
        ]);
    }



    public function login(){
        return view('authentication.login',[
            'title' => 'Login'
        ]);
    }

    public function loginPost(Request $request){

        $credentials = $request->validate([
            'email' => 'required|email|exists:users,email',
            'password'  => 'required|min:8'
        ]);

        if( Auth::attempt($credentials) ){
            $request->session()->regenerate();

            return redirect('dashboard');
        }else{
            return redirect('login')->with('wrong', 'password is wrong');
        }



    }


    public function signout(Request $request){

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();


        return redirect('/');

    }


}
