<?php

namespace App\Http\Controllers;

use App\Labo;
use App\Patient;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LaboController extends Controller
{
    /*print*/
    public function _print($id){
        $labor = Labo::findOrFail($id);
        return view('labor.print-page',compact('labor'));
    }
    public function create(Request $request)
    {
        $input = $request->all();
        $patient = Patient::findOrFail($input['patient_id']);
        return view('labor.create',compact('patient'));
    }
    /*store*/
    public function store(Request $request)
    {
        $input = $request->all();
        if ($input['triglyceride']==null){
            $input['triglyceride'] = -999;
        }
        if($input['cholesterol']==null){
            $input['cholesterol']= -999;
        }
        if ($input['glucose']==null){
            $input['glucose'] = -999;
        }
        if ($input['calcium']==null){
            $input['calcium'] = -999;
        }
        if ($input['ac_urique']==null){
            $input['ac_urique'] = -999;
        }
        if ($input['creatinine']==null){
            $input['creatinine'] = -999;
        }
        if ($input['magnesium']==null){
            $input['magnesium'] = -999;
        }
        if ($input['sgot']==null){
            $input['sgot'] = -999;
        }
        if ($input['sgpt']==null){
            $input['sgpt'] = -999;
        }
        $input['created_at'] = Carbon::now();
        $validator = Validator::make($input, [
            'patient_id'=>'required',
            'wbc'=>'required',
            'rbc'=>'required',
            'lym'=>'required',
            'mid'=>'required',
            'gran'=>'required',
            'lym_perc'=>'required',
            'mid_perc'=>'required',
            'gran_perc'=>'required',
            'hgb'=>'required',
            'hct'=>'required',
            'mcv'=>'required',
            'mch'=>'required',
            'mchc'=>'required',
            'plt'=>'required',

            'triglyceride'=>'required',
            'cholesterol'=>'required',
            'glucose'=>'required',
            'calcium'=>'required',
            'ac_urique'=>'required',
            'creatinine'=>'required',
            'magnesium'=>'required',
            'sgot'=>'required',
            'sgpt'=>'required',

            'crp'=>'required',
            'h_pylori'=>'required',
            'hbsag'=>'required',
            'hbsab'=>'required',
            'hcv'=>'required',

            'blood_pressure'=>'required',
            'pulse'=>'required',
            'heat'=>'required',
            'sp_two'=>'required',

            'user'=>'required',
        ]);
        if ($validator->passes()) {
            $newLabor = Labo::create($input);
            if ($newLabor){
                return response()->json(['success'=>'Added new records.','labor_id'=>$newLabor->id]);
            }
        }
        return response()->json(['error'=>$validator->errors()->all()]);
    }
}
