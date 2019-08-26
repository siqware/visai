<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class PatientController extends Controller
{
    /*list*/
    public function list()
    {
        $patient = Patient::all();
        return DataTables::of($patient)
            ->addColumn('action',function ($action){
                return '<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item text-info"><i class="icon-checkbox-checked"></i> ពិនិត្យជម្ងឺ</a>
												<a href="#" class="dropdown-item text-info" id="echo-create" data-id="'.$action->id.'" data-toggle="modal" data-target="#modal_action"><i class="icon-checkbox-checked"></i> អេកូ</a>
												<a href="#" class="dropdown-item text-info" id="labor-create" data-id="'.$action->id.'" data-toggle="modal" data-target="#modal_action"><i class="icon-checkbox-checked"></i> ឡាបូ</a>
												<a href="#" id="patient-edit" data-id="'.$action->id.'" data-toggle="modal" data-target="#modal_action" class="dropdown-item text-success"><i class="icon-database-edit2"></i> កែប្រែ</a>
												<a href="#" id="patient-destroy" data-id="'.$action->id.'" class="dropdown-item text-warning"><i class="icon-database-remove"></i> លុប</a>
											</div>
										</div>';
            })
            ->make(true);
    }
    public function index()
    {
        return view('patient.index');
    }

    public function create()
    {
        return view('patient.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        if ($input['national_id']==null){
            $input['national_id'] = 'មិនបានដាក់ជូន';
        }
        $validator = Validator::make($input, [
            'name'=>'required',
            'gender'=>'required',
            'dob'=>'required',
            'tel'=>'required',
            'address'=>'required',
            'national_id'=>'required',
        ]);
        if ($validator->passes()) {
            $newPatient = Patient::create($input);
            if ($newPatient){
                return response()->json(['success'=>'Added new records.']);
            }
        }
        return response()->json(['error'=>$validator->errors()->all()]);
    }

    public function show(Patient $patient)
    {
        //
    }

    public function edit($id)
    {
        $patient = Patient::findOrFail($id);
        return view('patient.edit',compact('patient'));
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        if ($input['national_id']==null){
            $input['national_id'] = 'មិនបានដាក់ជូន';
        }
        $validator = Validator::make($input, [
            'name'=>'required',
            'gender'=>'required',
            'dob'=>'required',
            'tel'=>'required',
            'address'=>'required',
            'national_id'=>'required',
        ]);
        if ($validator->passes()) {
            $newPatient = Patient::findOrFail($id)->update($input);
            if ($newPatient){
                return response()->json(['success'=>'Added new records.']);
            }
        }
        return response()->json(['error'=>$validator->errors()->all()]);
    }

    public function destroy($id)
    {
        $patient = Patient::findOrFail($id)->delete();
        if ($patient){
            return response()->json(['success'=>'deleted records.']);
        }
    }
}
