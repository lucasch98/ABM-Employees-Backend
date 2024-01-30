<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    public $timestamp = false;
    protected $table = 'departments';

    protected $fillable = [
        'name',
        'description',
    ];

    public function employees() {
        return $this->hasMany(Employee::class, 'department_id', 'id');
    }
}
