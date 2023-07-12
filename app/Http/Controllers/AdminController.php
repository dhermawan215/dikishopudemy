<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function adminDashboard()
    {
        return view('admin.index');
    }

    public function adminLogin()
    {
        return \view('admin.admin-login');
    }

    public function adminProfile()
    {
        $id = Auth::user()->id;
        $adminData = User::find($id);

        return \view('admin.admin-profile', ['adminData' => $adminData]);
    }
}
