<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employee;

class employeeController extends Controller
{
    //
    public function index(){

        $employee = employee::all(); 
    	return view('employee.index',compact('employee'));
    }

    public function store(Request $request){
        
    	$tbl= new employee();
    	$tbl->id = $request->id;
    	$tbl->name = $request->name;
    	$tbl->email = $request->email;
    	$tbl->address = $request->address;
    	$tbl->save();
        return redirect()->route('employee.index')->with('info','Employee Added successfully');
    }

    public function create(){

        return view('employee.create');
    }

    public function show(){

        $employee = employee::all();
        return view('employee.index',compact('employee',$employee));

    }
    public function edit($id){

        $employee = employee::find($id);

        return view ('employee.edit',compact('employee',$employee));
    }

    public function update(Request $request){

        $employee = employee::find($request->input('id'));
        $employee->name =  $request->input('name');
        $employee->email = $request->input('email');
        $employee->address = $request->input('address');
       
        $employee->save();

        return redirect()->route('employee.index')->with('success', 'employee updated!');
    }

    public function destroy($id){

        $employee = employee::find($id);
        $employee->delete();

        return redirect()->route('employee.index')->with('success','contact deleted');
    }
}
