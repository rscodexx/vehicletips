<?php

namespace App\Http\Controllers\Tips;

use App\Http\Controllers\Controller;
use App\Models\Tip;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Brand;
use App\Models\Version;
use Illuminate\Support\Facades\Validator;

class TipController extends Controller
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

    public function tipsCreate(Request $request)
    {
        $vehicles = Vehicle::all();

        $brands = Brand::all();

        $versions = Version::all();

        return view('user.tipsCreate',[
            'vehicles' => $vehicles,
            'brands' => $brands,
            'verions' => $versions
        ]);
    }

    public function tipsCreateDo(Request $request)
    {

        $validator = Validator::make($request->only('title', 'body'), [
            'title' => 'required|min:4|unique:tips',
            'body' => 'required|min:10'
        ]);

        if ($validator->fails()) {
            return redirect('tips/create')
                ->withErrors($validator)
                ->withInput();
        }

        if($request->input('type') != "car" && $request->input('type') != "truck" && $request->input('type') != "motocycle"){
            return back()->withErrors([
                'type' => 'Tipo inválido'
            ]);
        }

        $vehicles = Vehicle::select('name')->where('name', $request->only('vehicle'))->first();

        if(is_null($vehicles)){
            return back()->withErrors([
                'vehicle' => 'Veículo inválido'
            ]);
        }

        $brands = Brand::select('name')->where('name', $request->only('brand'))->first();

        if(is_null($brands)){
            return back()->withErrors([
                'brand' => 'Marca inválida'
            ]);
        }

        $versions = Version::select('name')->where('name', $request->only('version'))->first();

        if(is_null($versions)){
            return back()->withErrors([
                'brand' => 'Versão inválida'
            ]);
        }

        $tips = new Tip;
        $tips->title = $request->title;
        $tips->type = $request->type;
        $tips->vehicle = $request->vehicle;
        $tips->brand = $request->brand;
        $tips->version = $request->version;
        $tips->body = $request->body;
        $tips->user_id = Auth::id();
        $tips->save();

        return redirect()->route('user.tips.my')->with('custom_alert','Dica cadastrada com sucesso.');

    }

    public function tipsDel(Request $request)
    {

        $tip = Tip::select('id')->where('id', $request->id)->where('user_id', Auth::id())->first();

        if($tip) {
            $msgDel['success'] = true;
            $msgDel['message'] = "Dica deletada com sucesso.";
            $tip->delete();
            echo json_encode($msgDel);
        } else {
            $msgDel['success'] = false;
            $msgDel['message'] = "Dica não encontrada.";
            echo json_encode($msgDel);
        }
    }
}
