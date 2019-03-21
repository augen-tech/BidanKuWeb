<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use App\Pregnancy;

class HealthNoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */

    public function showList()
    {
        //
        
        // $pregnancies = Pregnancy::all();
        
        // return view('pages.listPregnancy',compact('pregnancies'));
        return view('pages.listHealthNote');
        
    }
 
    public function form()
    {              
        return view('pages.formHealthNote');        
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