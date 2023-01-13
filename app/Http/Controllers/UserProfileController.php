<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function dashboard() {
        return view('admin.index');
    }
    public function user_profile() {
        return view('admin.user_profile');
    }
}
