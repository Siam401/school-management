<?php

namespace Database\Seeders;

use App\Teacher;
use App\UserPayroll;
use App\SalaryHeadUserPayroll;
use Illuminate\Database\Seeder;
use App\Services\SalaryHeadService;

class TeacherSeeder extends Seeder
{
	public function __construct(
		private readonly SalaryHeadService $salaryHead
	) {
	}

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$teacherData = [
			[
				'id' => 1,
				'user_id' => 2,
				'is_administrator' => '0',
				'is_visible_website' => '0',
				'department_id' => 1,
				'name' => 'Super Admin',
				'designation' => 'Lecturer',
				'birthday' => '2000-09-01',
				'gender' => 'Male',
				'religion' => 'Islam',
				'phone' => '01951233084',
				'address' => 'Mymensingh',
				'joining_date' => now(),
				'blood' => 'O+',
				'sl' => 1,
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'id' => 2,
				'user_id' => 3,
				'is_administrator' => '1',
				'is_visible_website' => '1',
				'department_id' => 2,
				'name' => 'Fr. Thadeus Hembrom, CSC',
				'designation' => 'Principal',
				'birthday' => '2000-09-01',
				'gender' => 'Male',
				'religion' => 'Christian',
				'phone' => '01951233000',
				'address' => 'Mymensingh',
				'joining_date' => now(),
				'blood' => 'O+',
				'sl' => 1,
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'id' => 3,
				'user_id' => 4,
				'is_administrator' => '1',
				'is_visible_website' => '1',
				'department_id' => 1,
				'name' => 'Fr. Hubert Palma',
				'designation' => 'Director of administration and student guidance',
				'birthday' => '2000-09-01',
				'gender' => 'Male',
				'religion' => 'Christian',
				'phone' => '01951233001',
				'address' => 'Mymensingh',
				'joining_date' => now(),
				'blood' => 'O+',
				'sl' => 2,
				'created_at' => now(),
				'updated_at' => now(),
			],
		];

		foreach ($teacherData as $data) {
			$teacher = Teacher::create($data);

			if ($teacher) {
				$userPayroll = UserPayroll::create([
					'user_id' => $data['user_id'],
					'net_salary' => 40,
					'current_due' => 10,
					'current_advance' => 5
				]);

				if ($userPayroll) {
					$salaryHeads = $this->salaryHead->getSalaryHeads();

					foreach ($salaryHeads as $salaryHead) {
						SalaryHeadUserPayroll::create([
							'user_payroll_id' => $userPayroll->id,
							'salary_head_id' => $salaryHead->id,
							'amount' => 10,
						]);
					}
				}
			}
		}
	}
}
