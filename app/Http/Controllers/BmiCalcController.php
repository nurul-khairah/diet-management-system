<?php

namespace App\Http\Controllers;

use App\Models\BmiCalc;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BmiCalcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        
        $weight = $request->get('weight');
        $height = $request->get('height'); 
        $height2= ($height*$height);
        $bmi = $weight/($height2);
        
        return $bmi;
        //$bmi = bmi($weight,$height); 
        if ($bmi <= 18.5){ 
            $output == "UNDERWEIGHT"; 
        }elseif ($bmi > 18.5 AND $bmi<=24.9){
           $output == "NORMAL WEIGHT";

        } elseif ($bmi > 24.9 AND $bmi<=29.9) {
            $output == "OVERWEIGHT";

        } elseif ($bmi > 30.0){ 
            $output == "OBESE";
        }
        return redirect('/bmicalculation')->with('message','Your bmi is:'. $bmi . "and you are: " .$output);

        
        // echo $output;
        //return redirect()->route('/bmicalculation')->with('success','Your bmi is:'. $bmi . "and you are: " .$output);
        

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
     * @param  \App\Models\BmiCalc  $bmiCalc
     * @return \Illuminate\Http\Response
     */
    public function show(BmiCalc $bmiCalc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BmiCalc  $bmiCalc
     * @return \Illuminate\Http\Response
     */
    public function edit(BmiCalc $bmiCalc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BmiCalc  $bmiCalc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BmiCalc $bmiCalc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BmiCalc  $bmiCalc
     * @return \Illuminate\Http\Response
     */
    public function destroy(BmiCalc $bmiCalc)
    {
        //
    }
}
