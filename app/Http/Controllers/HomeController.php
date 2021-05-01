<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User\Auth\User;
use App\Models\Vehicle;
use App\Models\Tip;

class HomeController extends Controller
{
    public function index()
    {

        $usersCount = User::count();

        $motocycleList = Tip::select()->where('type', "motocycle")->get();
        $motocycleCount = count($motocycleList);

        $carList = Tip::select()->where('type', "car")->get();
        $carCount = count($carList);

        $truckList = Tip::select()->where('type', "truck")->get();
        $truckCount = count($truckList);

        $tipsList = Tip::select()->orderByDesc('updated_at')->limit(10)->with('users')->get();

        return view('home', [
            'usersCount' => $usersCount,
            'motocycleCount' => $motocycleCount,
            'carCount' => $carCount,
            'truckCount' => $truckCount,
            'tipsList' => $tipsList,
        ]);
    }
}
