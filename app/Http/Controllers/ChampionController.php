<?php

namespace App\Http\Controllers;

use App\Models\Champion;
use Illuminate\Support\Facades\Route;
use App\Http\Requests\StoreChampionRequest;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ChampionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $champions = Champion::with('rarity','tribe','region')->orderBy('rarityId', 'desc')->get();
        return Inertia::render('Champion/Index', [
            'champions' => $champions
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Champion/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChampionRequest $request)
    {
        Champion::create(
            $request->validated()
        );

        return redirect()->route('champions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Champion  $champion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Champion  $champion
     * @return \Illuminate\Http\Response
     */
    public function edit(Champion $champion)
    {
        return Inertia::render('Champion/Edit', [
            'champion' => [
                'id' => $champion->id,
                'name' => $champion->name,
            ]
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Champion  $champion
     * @return \Illuminate\Http\Response
     */
    public function update(StoreChampionRequest $request, Champion $champion)
    {
        $champion->update($request->validated());
        return redirect()->route('champions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Champion  $champion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Champion $champion)
    {
        $champion->delete();
        return redirect()->route('champions.index');
    }
}
