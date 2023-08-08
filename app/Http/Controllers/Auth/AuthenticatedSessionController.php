<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\House;
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
        $house = House::latest()->with(['images', 'types', 'states'])->take(8)->get();
        $houses = House::latest()->with(['images', 'types', 'states'])->take(6)->get();
        return view('index', compact('house', 'houses'));
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

        if(Auth::user()->user_type == 'admin')
        {
            return redirect('/admin')->with('message','Welcome to Admin Dashboard!');
         }
        //elseif(Auth::user()->user_type == 'staff')
        // {
        //     return redirect('/staff')->with('message','Welcome to Staff Dashboard!');
        // }
        else{
            return redirect('/agents')->with('message', 'Successfully login');
        }

        //return redirect()->intended(RouteServiceProvider::HOME)->with('message', 'Welcome to Admin Dashboard');
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
}
