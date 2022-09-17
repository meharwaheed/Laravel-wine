<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAusWineRequest;
use App\Http\Requests\UpdateAusWineRequest;
use App\Models\AusWine;
use Illuminate\Http\Request;

class AusWineController extends Controller
{
//    auth middleware
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getWines(){
        $data['ausWines'] = AusWine::all();
        return view('index')->with($data);
    }

    public function getForm(){
        return view('form');
    }
    public function save(StoreAusWineRequest $request){
        $validated = $request->validated();
        AusWine::create($validated);
        return redirect()->route('getWines');
    }

    public function editWine($id){
        $ausWine = AusWine::findOrFail($id);
        return view('form',compact('ausWine'));
    }

    public function updateWine(UpdateAusWineRequest $request, $id){
        $validated = $request->validated();
        $ausWine = AusWine::findOrFail($id);
        $ausWine->update($validated);
        return redirect()->route('getWines');
    }

    public function delete($id){
        $ausWine = AusWine::findOrFail($id);
        $ausWine->delete();
        return redirect()->back();
    }
}
