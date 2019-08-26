<?php

namespace App\Http\Controllers;

use App\EchoTemplate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EchoTemplateController extends Controller
{
    public function create(){
        return view('echo-template.create');
    }
    public function search(Request $request)
    {
        $inputTerm = $request->_term;
        $results = EchoTemplate::where('title','like',"%$inputTerm%")->get();
        $data = [];
        foreach ($results as $result) {
            $data[] = [
                'id' => $result['id'],
                'text' => $result['title'],
            ];
        }
        return response()->json(['results' => $data]);
    }
    /*store*/
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'title'=>'required',
            'content'=>'required',
        ]);
        if ($validator->passes()) {
            $newPatient = EchoTemplate::create($input);
            if ($newPatient){
                return response()->json(['success'=>'Added new records.']);
            }
        }
        return response()->json(['error'=>$validator->errors()->all()]);
    }
    public function show($id){
        $echo_template = EchoTemplate::findOrFail($id);
        return $echo_template->content;
    }
}
