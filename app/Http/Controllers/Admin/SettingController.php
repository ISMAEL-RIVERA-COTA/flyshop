<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

class SettingController extends Controller
{
    public function index()
    {      
        $users = User::all();

        return view('admin.setting', compact('users'));
    }
}
