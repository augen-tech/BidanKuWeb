<?php

namespace App\Http\Controllers;

use App\Patient;
use App\PatientRegistration;
use App\PatientBiodata;
use App\HelperBiodata;
use Illuminate\Http\Request;



class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $patients = Patient::all();        
        return view('pages.indexPatient',compact('patients'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //     
        $helperBiodatas = HelperBiodata::all();
        $patientCount = count(Patient::all());
        return view('pages.formPatient',compact('patientCount','helperBiodatas'));      
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
        // return dd($request);

        //Create Patient
        $tempPatient = [
            'email' => "email",
            'phone_number' => 132456789,
            'password' => 132456789,
        ];
        $patient = Patient::create($tempPatient);

        //Create Patient Registration
        $tempPatientRegistration = [
            'patient_id' => $patient->id,
            'helper_id' => $request->helperId,
            'kohort_number' => $request->kohortNumber,
            'kia_book_receive_date' => $request->kiaDate,
        ];
        $patientRegistration = PatientRegistration::create($tempPatientRegistration);
        

        //Create Patient Biodata
        $tempPatientBiodata = [
            'patient_id' => $patient->id,
            'blood_type_id' => $request->patientBloodTypeId,
            'name' => $request->patientName,
            'birth_date' => $request->patientBirthDate,
            'birth_place' => $request->patientBirthPlace,
            'pregnancy_count' => $request->pregnancyCount,
            'labor_count' => $request->laborCount,
            'miscarriage_count' => $request->miscarriageCount,
            'premature_child_count' => $request->prematureChildCount,
            'born_died_count' => $request->bornDiedCount,
            'life_child_count' => $request->lifeChildCount,
            'last_child_age' => $request->lastChildAge,
            'education' => $request->patientEducation,
            'religion' => $request->patientReligion,
            'occupation' => $request->patientOccupation,
            'jkn_number' => $request->jknNumber,
            'address' => $request->patientAddress,
            'sub_distric' => $request->patientSubDistrict,
            'distric' => $request->patientDistric,
            'family_phone_number' => $request->familyPhoneNumber,
        ];

        return redirect()->route('patient.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        //
    }
}
