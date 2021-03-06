<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Patient;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index($onPatientList)
    // {
    //     //
    //     $resultLabs = ResultLab::all();
    //     $patients = Patient::all();
    //     if($onPatientList == 1){
    //         return view('pages.healthAnalyst.resultLab.list',compact('resultLabs','patients'));
    //     }else{
    //         return view('pages.healthAnalyst.resultLab.list',compact('resultLabs'));
    //     }
    // }
    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */

    public function showList()
    {
        //
        
        $patients = Patient::all();
        
        return view('pages.listPatient',compact('patients'));
        
    }
    public function create()
    {
                  
        $tempDiagnoses = Diagnosis::doesntHave('resultLab');    
        $diagnoses = $tempDiagnoses->where('special_request', '=', 1)->orderBy('created_at','ASC')->get();
        
        return view('pages.healthAnalyst.resultLab.create',compact('diagnoses'));  
    }
    public function form()
    {
        //
        // $diagnosis = Diagnosis::find($id);        
        return view('pages.formPatient');        
    }
    
    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    //     // return dd($request->all());
    //     $data = [
    //         'diagnosis_id' => $request->diagnosis_id,
    //         'result' => $request->result,
    //         'price' => $request->price
    //     ];
    //     ResultLab::create($data);
    //     return redirect()->route('healthAnalyst.resultLab.list',0);
        
    // }
    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
        
    // }
    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     //
        
    //     $resultLab = ResultLab::find($id);        
    //     return view('pages.healthAnalyst.resultLab.form',compact('resultLab'));  
    // }
    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     //
    //     $resultLab = ResultLab::findOrFail($id);
              
        
    //     $input = $request->all();
    
    //     $resultLab->fill($input)->save();
    //     // Session::flash('flash_message', 'Task successfully added!');
    
    //     return redirect()->route('healthAnalyst.resultLab.list',0);
    // }
    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    //     $resultLab = ResultLab::find($id);
    //     $resultLab->delete();
    //     return redirect()->route('healthAnalyst.resultLab.list',0);
    // }
}