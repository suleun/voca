<?php

namespace App\Http\Controllers;

use App\Models\Voca;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Redirect;

class vocaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
            'mean'=>'required',
        ]);

        $voca = new Voca();
        $voca -> japanese = $request->japanese;
        $voca -> hiragana = $request->hiragana;
        $voca -> mean = $request->mean;

        $date = Carbon::now();
        $todate = $date->format('Y-m-d');
        
        $voca -> today = $todate;

        $voca->save();

        return Redirect::route('main');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        

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
        $voca = Voca::find($id);
        $voca->delete();

        return Redirect::route('voca/See', ['vocas'=>Voca::all(), 'count'=>Voca::all()->count()]);
    }

    public function find(Request $request)
    {
        $word = Voca::where("mean", $request->find)->get();
        return Redirect::route('see');
    }
}
