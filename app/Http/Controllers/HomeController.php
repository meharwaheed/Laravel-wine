<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWineAusRequest;
use App\Http\Requests\UpdateWineAusRequest;
use App\Models\WineAus;

class HomeController extends Controller
{

    //    auth middleware
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['aus_wines'] = WineAus::all();
        return view('index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wineForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreWineAusRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWineAusRequest $request)
    {
        $data = $request->validated();
        WineAus::create($data);
        return redirect()->route('ausWines.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WineAus  $wineAus
     * @return \Illuminate\Http\Response
     */
    public function show(WineAus $wineAus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WineAus  $wineAus
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wineAus = WineAus::findOrFail($id);
        return view('wineForm', compact('wineAus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWineAusRequest  $request
     * @param  \App\Models\WineAus  $wineAus
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWineAusRequest $request, $id)
    {
        $data = $request->validated();
        $wineAus = WineAus::findOrFail($id);
        $wineAus->update($data);
        return redirect()->route('ausWines.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WineAus  $wineAus
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wineAus = WineAus::findOrFail($id);
        $wineAus->delete();
        return redirect()->back();
    }
}
