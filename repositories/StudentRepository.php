<?php

class StudentRepository extends DBRepository implements IStudentRepository
{

    public static function all(): array
    { 
         $query= self::query("SELECT * FROM students");
       
        $result = [];
         foreach($query as $s ) {
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
