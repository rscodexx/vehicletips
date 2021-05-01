<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Tip;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function tips()
    {

        $tips = Tip::select()->orderByDesc('updated_at')->with('users')->get();

        return view('user.tips', [
            'tips' => $tips
        ]);
    }
}
