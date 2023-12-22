<?php

namespace Database\Seeders;

use App\Staff;
use App\UserPayroll;
use App\SalaryHeadUserPayroll;
use Illuminate\Database\Seeder;
use App\Services\SalaryHeadService;

class StaffSeeder extends Seeder
{
    public function __construct(
        private readonly SalaryHeadService $salaryHead
    ) {
    }

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $staffData = [
            [
                'id' => 1,
                'user_id' => 5,
                'department_id' => 3,
                'name' => 'Staff 01',
                'designation' => 'Secretary',
                'birthday' => '2000-09-01',
                'gender' => 'Male',
                'religion' => 'Islam',
                'phone' => '01840416216',
                'address' => 'Mymensingh',
                'joining_date' => now(),
                'blood' => 'O+',
                'sl' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        foreach ($staffData as $data) {
            $staff = new Staff($data);

            if ($staff->save()) {
                $userPayroll = new UserPayroll([
                    'user_id' => $data['user_id'],
                    'net_salary' => 40,
                    'current_due' => 10,
                    'current_advance' => 5
                ]);
                $userPayroll->save();

                $salaryHeads = $this->salaryHead->getSalaryHeads();

                foreach ($salaryHeads as $salaryHead) {
                    $salaryHeadUserPayroll = new SalaryHeadUserPayroll([
                        'user_payroll_id' => $userPayroll->id,
                        'salary_head_id' => $salaryHead->id,
                        'amount' => 10,
                    ]);
                    $salaryHeadUserPayroll->save();
                }
            }
        }
    }
}
