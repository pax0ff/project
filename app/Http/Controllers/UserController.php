<?php

namespace App\Http\Controllers;

use App\Models\User as User;
use Illuminate\Http\Request;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function userProfile() {
        return view('layouts/profile');
    }

    public function index() {
        $users = User::latest()->paginate(5);

        return view('users.index',compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create() {
        return view('users.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        User::create($request->all());

        return redirect()->route('users.index')
            ->with('success','User created successfully.');
    }

    public function show(User $user) {
        return view('users.show',compact('user'));
    }

    public function edit(User $user) {
        return view('users.edit',compact('user'));
    }

    public function update(Request $request, User $user) {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $user->update($request->all());

        return redirect()->route('users.index')
            ->with('success','User updated successfully');
    }

    public function destroy(User $user) {
        $user->delete();

        return redirect()->route('users.index')
            ->with('success','User deleted successfully');
    }

}
