<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\finances;
class FinancesController extends Controller
 

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function insertform()
    {
        return view('fin_form');
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
       $vdata= $request->validate([
            'proj_name'=>'required',
            'assig_year'=>'required','max=4','numeric',
            'proj_cost'=>'required','numeric',
            'fina_type'=>'required',
            'fina_classfic'=>'required',
            'fina_amnt_loc'=>'required','numeric',
            'fina_amnt_for'=>'required','numeric',
            'notes'
        ]);
       
            DB::table('finances')->insert($vdata
                /* 
                'proj_name'=>$request->input('proj_name'),
                'assig_year'=>$request->input('assig_year'),
                'proj_cost'=>$request->input('proj_cost'),
                'fina_type'=>$request->input('fina_type'),
                'fina_classfic'=>$request->input('fina_classfic'),
                'fina_amnt_loc'=>$request->input('fina_amnt_loc'),
                'fina_amnt_for'=>$request->input('fina_amnt_for'),
                'notes'=>$request->input('notes') */
            );  
            return redirect('/fin_form'); 
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
