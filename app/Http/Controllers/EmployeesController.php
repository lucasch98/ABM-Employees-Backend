<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use Exception;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index() {
        $employees = Employee::all();
        return $employees;
    }

    public function store(Request $request) {
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->last_name = $request->last_name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->dni = $request->dni;
        if($request->birth_date != NULL) {
            $employee->birth_date = $request->birth_date;
        }
        $employee->position_job = $request->position_job;
        $employee->department_id = $request->department_id;
        $employee->save();
        
        return $employee;
    }

    public function show($id) {
        try{
            $employee = Employee::findOrFail($id);
            return $employee;
        }catch(Exception $er){
            return response()->json(['message' => 'No se encontro el empleado']);
        }
    }

    public function update(Request $request, $id) {
        try{
            $employee = Employee::findOrFail($id);
            $employee->name = $request->name;
            $employee->last_name = $request->last_name;
            $employee->email = $request->email;
            $employee->phone = $request->phone;
            $employee->dni = $request->dni;
            if($request->birth_date != NULL) {
                $employee->birth_date = $request->birth_date;
            }
            $employee->position_job = $request->position_job;
            $employee->department_id = $request->department_id;
            $employee->save();
            
            return $employee;
        }catch(Exception $error){
            return response()->json(['message' => 'No se pudo actualizar los datos del empleado']);
        }
    }

    public function destroy($id) {
        try{
            $employee = Employee::findOrFail($id);
            $employee->delete();
        }catch(Exception $er){
            return response()->json(['message' => 'No se pudo eliminar el empleado']);
        }
    }
}
