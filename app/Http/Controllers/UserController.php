<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function showChangeUserRoleForm()
{
    return view('change-user-role');
}

public function updateUserRole(Request $request)
{
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'new_role' => 'required|in:patient,admin,doctor', // Переконайтеся, що дозволені ролі
        ]);

        $user = 'App\Models\User'::find($request->input('user_id'));
        $user->role = $request->input('new_role');
        $user->save();

    return redirect()->route('change-user-role')
        ->with('success', 'Роль користувача була успішно оновлена.');
}
}
