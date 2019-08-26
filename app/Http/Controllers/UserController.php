<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    /*datatable list*/
    public function list()
    {
        $user = User::all();
        return DataTables::of($user)
            ->editColumn('picture',function ($picture){
                return '<img src="'.asset($picture->picture).'" width="35" height="35" class="rounded-circle">';
            })
            ->editColumn('status',function ($status){
                return view('user.status',compact('status'));
            })
            ->editColumn('email',function ($email){
                return '<a href="mailto:'.$email->email.'">'.$email->email.'</a>';
            })
            ->editColumn('created_at',function ($date){
                return Carbon::parse($date->created_at)->format('d, m-M, Y');
            })
            ->addColumn('action',function ($action){
                return '<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="'.route('user.edit',$action->id).'" class="dropdown-item text-success"><i class="icon-database-edit2"></i> Edit</a>
											</div>
										</div>
									</div>';
            })
            ->rawColumns(['picture','action','status','email'])
            ->make(true);
    }
    /*index*/
    public function index(){
        return view('user.index');
    }
    /*create*/
    public function create(){
        return view('user.create');
    }
    /*edit*/
    public function edit($id){
        $userEdit = User::findOrFail($id);
        return view('user.edit',compact('userEdit'));
    }
    /*update*/
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $userUpdate = User::findOrFail($id);
        if ($userUpdate->role=='super_admin'){
            if (Auth::user()->role=='super_admin'){
                if ($input['password']==null){
                    $input['password']=$userUpdate->password;
                }else{
                    $input['password'] = Hash::make($input['password']);
                }
                $update = $userUpdate->update($input);
                if ($update){
                    return redirect(route('user.index'));
                }
            }else{
                return redirect(route('user.index'));
            }
        }
        if ($input['password']==null){
            $input['password']=$userUpdate->password;
        }else{
            $input['password'] = Hash::make($input['password']);
        }
        $update = $userUpdate->update($input);
        if ($update){
            return redirect(route('user.index'));
        }
    }
    /*store*/
    public function store(Request $request)
    {
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $createUser = User::create($input);
        if ($createUser){
            return redirect()->back();
        }
    }
    /*destroy*/
    public function destroy($id)
    {
        $userDelete = User::findOrFail($id);
        if ($userDelete->role=='super_admin'){
            return redirect(route('user.index'));
        }else{
            $userDelete->delete();
        }
        if ($userDelete){
            return redirect(route('user.index'));
        }
    }
}
