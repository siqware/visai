<?php

namespace App\Http\Controllers;

use App\_Echo;
use App\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Mews\Purifier\Facades\Purifier;

class EchoController extends Controller
{
    public function index()
    {
        //
    }

    public function create(Request $request)
    {
        $input = $request->all();
        $patient = Patient::findOrFail($input['patient_id']);
        return view('echo.create',compact('patient'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'patient_id'=>'required',
            'title'=>'required',
            'type'=>'required',
            'result'=>'required',
            'user'=>'required',
            'attachment'=>'required',
            'created_at'=>'required',
        ]);
        $input['result'] = Purifier::clean($input['result']);
        if ($validator->passes()) {
            $newEcho = _Echo::create($input);
            if ($newEcho){
                return response()->json(['success'=>'Added new records.','echo_id'=>$newEcho->id]);
            }
        }
        return response()->json(['error'=>$validator->errors()->all()]);
    }

    public function _print($id){
        $echo = _Echo::findOrFail($id);
        return view('echo.print-page',compact('echo'));
    }

    public function show(_Echo $_Echo)
    {
        //
    }

    public function edit(_Echo $_Echo)
    {
        //
    }

    public function update(Request $request, _Echo $_Echo)
    {
        //
    }

    public function destroy(_Echo $_Echo)
    {
        //
    }
}
