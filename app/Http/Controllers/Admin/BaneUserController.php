<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class BaneUserController extends Controller
{
    public function banUser(Request $request ,User $user)
    {
        $user->update(['status' => 'banned']);
        return redirect(route('admin.index'));
    }
}
 