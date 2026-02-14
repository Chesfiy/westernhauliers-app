<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class AdminSettingsController extends Controller
{
    public function index()
    {
        return view('admin.settings.index');
    }

    public function showUsers()
    {

        $users = User::all();

        return view('admin.settings.users.listview', compact('users'));
    }

    public function newUser()
    {

        return view('admin.settings.users.form_view');
    }

    public function editUser($id)
    {

        $user = User::findOrFail($id);

        return view('admin.settings.users.edit_form_view', compact('user'));
    }

    public function storeUser(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'user_type' => $request->user_type,
        ]);

        event(new Registered($user));

        return view('admin.settings.users.edit_form_view', compact('user'));
    }

    public function updateUser(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],

        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        // $user->password = Hash::make($request->password);
        $user->user_type = $request->user_type;
        $user->save();

        return redirect()->back()->with('success', 'User updated successfully.');
    }
}
