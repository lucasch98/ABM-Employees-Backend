<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public $timestamp = false;
    protected $table = 'employees';
    
    protected $fillable = [
        'name',
        'last_name',
        'email',
        'phone',
        'dni',
        'position_job',
        'birth_date',
        'department_id',
    ];

    /*
    public function department() {
        return $this->belongsTo(Department::class);
    }
    */

    public function department() {
        return $this->belongsTo(Department::class, 'department_id');
    }

    /*public function getDepartmentName() {
        return $this->department->name;
    }*/
}
