<?php

namespace App\Http\Controllers;

use App\Models\Token;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TokenController extends Controller
{
    /**
     * Display a listing of the resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tokens = Token::orderBy('id','desc')->paginate(5);
        return Inertia::render('Tokens');
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
     * @param  \App\Models\Tokens  $tokens
     * @return \Illuminate\Http\Response
     */
    public function show(Tokens $tokens)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tokens  $tokens
     * @return \Illuminate\Http\Response
     */
    public function edit(Tokens $tokens)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tokens  $tokens
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tokens $tokens)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tokens  $tokens
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tokens $tokens)
    {
        //
    }
}
