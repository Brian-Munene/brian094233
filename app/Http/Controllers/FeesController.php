<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fee;
use DB;
class FeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo 'The total fee paid by all students is: ' . fee::sum('fee_paid');
        $fees = fee::all();
        return view('/BrianMunene.feesresult')->with('fees', $fees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('BrianMunene.fees');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            
            'id'=>'required',
            'names'=>'required',
            'fee_paid'=>'required'
       ]);
       //Create fee installment
       $fee = new Fee;
       $fee->id = $request->input('id');
       $fee->names = $request->input('names');
       $fee->fee_paid = $request->input('fee_paid');
       $fee->save();

       return back()->with('message', 'installment paid');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $id)
    { 
        
        $fees = Fee::where( 'id', $id['search'])->get();

        return view('BrianMunene.feesresult')->with('fees', $fees);

        

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
