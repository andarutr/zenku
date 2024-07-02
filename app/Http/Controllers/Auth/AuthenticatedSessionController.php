<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Activity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\LoginRequest;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('pages.auth.login');
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

        // Record to Activity
        \Record::track('Login');
        
        return response()->json([
            'role' => Auth::user()->role->role
        ]);

        // if(Auth::user()->role->role == 'Admin'){
        //     return redirect('/admin/dashboard')->withSuccess('Selamat Datang '.Auth::user()->name);
        // }elseif(Auth::user()->role->role == 'Guru'){
        //     return redirect('/guru/dashboard')->withSuccess('Selamat Datang '.Auth::user()->name);
        // }elseif(Auth::user()->role->role == 'User'){
        //     return redirect('/user')->withSuccess('Selamat Datang User!');
        // }else{
        //     return redirect('/penguji/dashboard')->withSuccess('Selamat Datang '.Auth::user()->name);
        // }
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        // Record to Activity
        \Record::track('Logout');

        // Hapus cache online
        Cache::forget('user-is-online-'.Auth::user()->id);
        
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login')->withSuccess('Berhasil Logout');
    }
}
