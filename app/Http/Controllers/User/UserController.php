<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Tip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function tips()
    {

        $tips = Tip::select()->orderByDesc('updated_at')->with('users')->get();

        return view('user.tips', [
            'tips' => $tips
        ]);
    }

    public function tipsSearch(Request $request){

        $tips = [];

        if($request->input('filter') == "marca"){

            $search = $request->only('search');

            $tips = Tip::select()->where('brand', $search)->orderByDesc('updated_at')->with('users')->get();

        }

        if($request->input('filter') == "modelo"){

            $search = $request->only('search');

            $tips = Tip::select()->where('vehicle', $search)->orderByDesc('updated_at')->with('users')->get();

        }

        if($request->input('filter') == "versao"){

            $search = $request->only('search');

            $tips = Tip::select()->where('version', $search)->orderByDesc('updated_at')->with('users')->get();

        }

        return view('user.tips', [
            'tips' => $tips
        ]);
    }

    public function myTips()
    {

        $tips = Tip::select()->where('user_id', Auth::id())->orderByDesc('updated_at')->with('users')->get();

        return view('user.myTips', [
            'tips' => $tips
        ]);
    }

    public function create()
    {
        return view('user.tips.create');
    }
}
