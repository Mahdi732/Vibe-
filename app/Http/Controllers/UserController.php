<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->input('search');
        
        $users = User::where('username', 'like', "%{$search}%")
                     ->orWhere('email', 'like', "%{$search}%")
                     ->get();

        return view('user.search-results', compact('users'));
    }
}

