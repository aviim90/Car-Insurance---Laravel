<?php

namespace App\Http\Controllers;

use App\Models\ShortCode;
use Illuminate\Http\Request;

class ShortCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shortC=ShortCode::all();
        return view("shortC.index",['shortC'=>$shortC]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $shortC=ShortCode::all();
        return view('shortC.create', ['shortC'=>$shortC]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $shortC=new ShortCode();
        $shortC->shortcode=$request->shortcode;
        $shortC->replace=$request->replace;
        $shortC->save();
        return redirect()->route('shortC.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShortCode  $shortCode
     * @return \Illuminate\Http\Response
     */
    public function show(ShortCode $shortCode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShortCode  $shortCode
     * @return \Illuminate\Http\Response
     */
    public function edit($shortCode)
    {
        $shortCode=ShortCode::find($shortCode);
        return view('shortC.update', ['shortCode'=>$shortCode]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ShortCode  $shortCode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $shortCode)
    {
        $shortCode=ShortCode::find($shortCode);
        $shortCode->shortcode=$request->shortcode;
        $shortCode->replace=$request->replace;

        $shortCode->save();
        return redirect()->route('shortC.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShortCode  $shortCode
     * @return \Illuminate\Http\Response
     */
    public function destroy($shortCode)
    {
        $shortCode=ShortCode::find($shortCode);
        $shortCode->delete();
        return redirect()->route('shortC.index');
    }
}
