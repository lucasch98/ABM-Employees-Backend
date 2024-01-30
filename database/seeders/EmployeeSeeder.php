<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    public function run(): void
    {
        Employee::create(array(
            'name' => 'NameExample',
            'last_name' => 'Last_Name_Example',
            'dni' => '40234561',
            'phone' => '987654321',
            'position_job' => 'developer',
            'email' => 'example@gmail.com',
            'birth_date' => Carbon::now()->subYears(random_int(20, 50))->subDays(random_int(0, 365)),
            'department_id' => Department::where('name', 'department1')
                                            ->where('description', 'description departament 1')
                                            ->first()->id,
        ));
    }
}
