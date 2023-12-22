<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentsImport implements ToCollection, WithHeadingRow
{
    public $data = [];

    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            if (
                $row['student_id'] ||
                $row['roll_no'] ||
                $row['name'] ||
                $row['gender'] ||
                $row['religion'] ||
                $row['fathers_name'] ||
                $row['mothers_name'] ||
                $row['mobile_no']
            ) {
                $this->data[] = [
                    'student_id' => $row['student_id'],
                    'roll_no' => $row['roll_no'],
                    'name' => $row['name'],
                    'gender' => $row['gender'],
                    'religion' => $row['religion'],
                    'fathers_name' => $row['fathers_name'],
                    'mothers_name' => $row['mothers_name'],
                    'mobile_no' => $row['mobile_no'],
                ];
            }
        }
    }
}
