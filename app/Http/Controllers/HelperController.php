<?php

namespace App\Http\Controllers;

use App\Helper;
use App\HelperBiodata;
use Illuminate\Http\Request;

class HelperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $helpers = Helper::all();   
        $helper_biodatas = HelperBiodata::all();         
        return view('pages.indexHelper',compact('helpers','helper_biodatas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return dd();
        return view('pages.formHelper');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return dd($request);

        //Create Helper
        $helper = [
            'email' => $request->email,
            'phone_number' => $request->phoneNumber,
            'password' => 132456789,
        ];
        $tempHelper = Helper::create($helper);
        

        //Create Helper Biodata
        $helperBiodata = [
            'helper_id' => $tempHelper->id,
            'name' => "$request->name",        
            'birth_date' => $request->birthDate,
            'birth_place' => $request->birthPlace,
        ];

        
        HelperBiodata::create($helperBiodata);
        return redirect()->route('helper.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Helper  $helper
     * @return \Illuminate\Http\Response
     */
    public function show(Helper $helper)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Helper  $helper
     * @return \Illuminate\Http\Response
     */
    public function edit(Helper $helper)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Helper  $helper
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Helper $helper)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Helper  $helper
     * @return \Illuminate\Http\Response
     */
    public function destroy(Helper $helper)
    {
        //
    }
}
