<?php

namespace App\Http\Controllers;

use App\Models\BmrCalc;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BmrCalcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $age = $request->get('age');
        $gender = $request->get('gender');
        $weight = $request->get('weight');
        $height = $request->get('height');
        $activity = $request->get('activity');

        switch ($gender){
            case 'Female':
            $gender= 655.1 + (9.563 * $weight ) + (1.85 * $height) - (4.676 * $age);
            //10*$weight+ 6.25*$height- 5*$age - 161;
            echo "<p>Your daily calorie needs is $gender </p>";
            
            break;
            case 'Male':
            $gender= 66.47 + (13.75 *$weight) + (5.003 * $height) - (6.755 * $age);
            //(10*$weight) + (6.25*$height) - (5*$age) + 5;
            echo "<p>Your daily calorie needs is $gender </p>"; 
            }
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
     * @param  \App\Models\BmrCalc  $bmrCalc
     * @return \Illuminate\Http\Response
     */
    public function show(BmrCalc $bmrCalc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BmrCalc  $bmrCalc
     * @return \Illuminate\Http\Response
     */
    public function edit(BmrCalc $bmrCalc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BmrCalc  $bmrCalc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BmrCalc $bmrCalc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BmrCalc  $bmrCalc
     * @return \Illuminate\Http\Response
     */
    public function destroy(BmrCalc $bmrCalc)
    {
        //
    }

    public function bmrcalc()
    {
        $activities=Activity::all();
        return view('bmrcalc', compact('activities'));
    }
}
