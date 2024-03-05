<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Organizer;
use Illuminate\Support\Facades\Auth;

class RoleSwitchController extends Controller
{
    public function switchToOrganizer()
    {
        $user = Auth::user();

        if ($user) {
            $user->roles()->sync([2]);
            $username = $user->username;
            $user_id = $user->id;
            Organizer::create([
                'username' => $username,
                'user_id' => $user_id,
            ]);
        }

        return redirect(route('organizer.index'));
    }


}
