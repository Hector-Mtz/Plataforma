<?php

namespace App\Http\Controllers;

use App\Models\games;
use Illuminate\Http\Request;
use Inertia\Inertia;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
  

    }


    public function MffIndex()
    {
        return Inertia::render('MFF/Mff.Index', [ ]);
    }


    public function SevenIndex()
    {
        return Inertia::render('MFF/Mff.Index', [ ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\games  $games
     * @return \Illuminate\Http\Response
     */
    public function show(games $games)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\games  $games
     * @return \Illuminate\Http\Response
     */
    public function edit(games $games)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\games  $games
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, games $games)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\games  $games
     * @return \Illuminate\Http\Response
     */
    public function destroy(games $games)
    {
        //
    }
}
