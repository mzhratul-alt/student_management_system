<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

  function login_page()
  {
    return view('Admin.login');
  }

  function login(Request $request)
  {
    $admin_credential = $request->validate([
      'email' => 'required|email|exists:admins,email',
      'password' => 'required|min:8|max:16'
    ]);

    if (Auth::guard('admin')->attempt($admin_credential)) {
      return redirect()->route('admin.dashboard');
    } else {
      return redirect()->back()->with('error', 'Wrong Credential!');
    }
  }


  function logout(Request $request)
  {
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect()->route('admin.login_page');
  }
}
