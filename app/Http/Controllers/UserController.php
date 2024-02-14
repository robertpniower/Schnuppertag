<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // display all users

    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|string|min:8',
            'admin' => 'boolean',
        ]);

        $user = new User();
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->admin = $request->input('is_admin');

        $user->save();

        return redirect('/users')->with('success', 'User registered successfully');
    }

    /**
     * Display a specific userf
     */
    public function show($id)
    {
        $user = User::where('user_id', $id)->first();
    return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing users
     */
    public function edit(User $user)
    {
        return view('user.edit', [
            'user' => $user,
        ]);
    }

    /**
     * Update users
     */
    public function update(Request $request, User $user)
    {
        $user->update([
            $user->username = $request->input('username'),
            $user->email = $request->input('email'),
            $user->password = Hash::make($request->input('password')),
            $user->admin = $request->input('admin'),
        ]);

        return redirect('user/' . $user->user_id . '/edit');
    }

    /**
     * Remove user
     */
    public function destroy($user_id)
    {

       
        $user = User::where('user_id', $user_id)->firstOrFail();
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }

    

}
