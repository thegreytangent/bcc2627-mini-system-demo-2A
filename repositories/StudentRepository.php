<?php

class StudentRepository extends DBRepository implements IStudentRepository
{

    public static function all(): array
    {   
        $students = [
            [
                'id' => 1,
                'student_number' => '2026-0001',
                'firstname' => 'Juan',
                'lastname' => 'Dela Cruz',
                'date_of_birth' => '2005-03-15'
            ],
            [
                'id' => 2,
                'student_number' => '2026-0002',
                'firstname' => 'Maria',
                'lastname' => 'Santos',
                'date_of_birth' => '2004-07-22'
            ],
            [
                'id' => 3,
                'student_number' => '2026-0003',
                'firstname' => 'Pedro',
                'lastname' => 'Reyes',
                'date_of_birth' => '2005-11-08'
            ],
            [
                'id' => 4,
                'student_number' => '2026-0004',
                'firstname' => 'Ana',
                'lastname' => 'Garcia',
                'date_of_birth' => '2004-01-30'
            ]

        ];

        $result = [];

        foreach($students as $s ) {
           $result[] = new Student( 
            $s['student_number'], 
            $s['firstname'], 
            $s['lastname'], 
            $s['date_of_birth'],
           );

        }
        return  $result;
    }

    public static function find(string $id): array
    {
        return [];
    }

    public static function update(array $data): array
    {
        return [];
    }

    public static function delete(string $id): void {}
}
