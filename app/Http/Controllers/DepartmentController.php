<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use Exception;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index() {
        $departments = Department::all();
        return $departments;
    }

    public function store(Request $request) {
        $departments = new Department();
        $departments->name = $request->name;
        $departments->description = $request->description;
        $departments->save();
        
        return $departments;
    }

    public function update(Request $request, $id) {
        try{
            $departments = Department::findOrFail($id);
            $departments->name = $request->name;
            $departments->description = $request->description;
            $departments->save();
            
            return $departments;
        }catch(Exception $error){
            return redirect()->back()->with('error', 'Error, algo salio mal');
        }
    }

    public function show($id) {
        $department = Department::findOrFail($id);
        return $department;
    }

    public function destroy($id) {
        try{
            $department = Department::findOrFail($id);
            $department->delete();
        }catch(Exception $er){
            return response()->json(['message' => 'No se pudo eliminar el departamento' + $er]);
        }
    }

    public function getEmployees($id_department){
        try{
            $department = Department::findOrFail($id_department);
            $employees = $department->employees;
            return response()->json($employees);
        }catch(Exception $er){
            return response()->json(["No se pudo traer los empleados asociados a este departamento"]);
        }
    }


}
