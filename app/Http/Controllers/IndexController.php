<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Chain as ChainApi;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ChainApi $chainApi)
    {
        return view('welcome')
            ->with('btc', $chainApi->getBitcoinPrice())
            ->with('ltc', $chainApi->getLitecoinPrice());
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
    public function store(Request $request, ChainApi $chainApi)
    {
        return view('welcome')
            ->with('btc', $chainApi->getBitcoinPrice())
            ->with('ltc', $chainApi->getLitecoinPrice())
            ->with('btc_results', $chainApi->getBitcoinHist('17JzE6xsyu4kZbLosvAKUXHdbU9arAp8Uf'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
