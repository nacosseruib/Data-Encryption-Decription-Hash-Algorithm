<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


       //Login
       //Login Form
    public function createLogin()
    {
        return view('auth.login');
    }

    public function attemptLogin(Request $request)
    {
           $this->validate($request,
           [
               'username'      => 'required|min:4',
               'password'      => 'required|min:8'
           ],['username'       => 'Email/Username']);

           try{
               $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
               if (Auth::attempt([$fieldType => $request->username, 'password' => $request->password])) {
                   return redirect()->intended('/home');
               }else{
                   return redirect()->back()->with('error', 'Email/Username or Password does not correct (or you have not confirmed your account)')->withInput();
               }
           }catch(\Throwable $errorThrown)
           {
               return redirect()->back()->with('error', 'Sorry, an error occurred while signing in to your account. Try again.')->withInput();
           }

       }



}//end class
