<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    public function run(): void
    {
        Department::create(array(
            'name' => 'department1',
            'description'=>'description departament 1',
        ));
    }
}
